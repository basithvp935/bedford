<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\clientRequest;
use App\Models\QuestionPaper;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class QuestionPaperController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(client::class);
    }

    public function index(QuestionPaper $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.question_papers.index');
    }

    public function getData()
    {

        $model = QuestionPaper::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('pdf', function (QuestionPaper $dpt) {
                return "<a href=" . url('upload/' . $dpt->pdf) . " target='_blank'>View</a>";
            })
            ->addColumn('actions', function (QuestionPaper $dpt) {
                return view('admin.question_papers.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'pdf'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.question_papers.create');
    }

    public function store(Request $request, QuestionPaper $model)
    {

        $this->validate($request, [
            'pdf' => 'required|mimes:pdf',
            'title' => 'required',
            'second_title' => 'required',
        ]);

        QuestionPaper::create([
            'pdf' => ($request->file('pdf')) ? $request->file('pdf')->store('QuestionPaperpdf', 'uploads') : NULL,
            'title' => $request->title,
            'second_title'=>$request->second_title,
            'small_title'=>$request->small_title
        ]);


        return redirect()->route('admin::question-papers.index')->withStatus(__('QuestionPaper successfully created.'));
    }

    public function edit(QuestionPaper $question_paper)
    {
        return view('admin.question_papers.edit', compact('question_paper'));
    }

    public function update(Request $request, QuestionPaper $question_paper)
    {
        $image = base_path('upload/' . $question_paper->pdf);


        $this->validate($request, [
            'pdf' => 'mimes:pdf',
            'title' => 'required',
            'second_title' => 'required',
        ]);

        if ($request->hasFile('pdf')) {
            if (is_file($image)) {
                unlink($image);
            }

            $question_paper->pdf = $request->file('pdf')->store('QuestionPaperpdf', 'uploads');
            $question_paper->save();
        }

        $question_paper->title = $request->title;
        $syllabus->second_title = $request->second_title;
        $syllabus->small_title = $request->small_title;
        $question_paper->save();

        return redirect()->route('admin::question-papers.index')->withStatus(__('QuestionPaper successfully updated.'));
    }

    public function destroy(QuestionPaper $question_paper)
    {
        $image = base_path('upload/' . $question_paper->pdf);


        try {
            if (is_file($image)) {
                unlink($image);
            }
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $question_paper->delete();


        return redirect()->route('admin::question-papers.index')->withStatus(__('QuestionPaper successfully deleted.'));
    }
}
