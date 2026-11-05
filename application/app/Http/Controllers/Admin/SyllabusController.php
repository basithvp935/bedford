<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\clientRequest;
use App\Models\Syllabus;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class SyllabusController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(client::class);
    }

    public function index(Syllabus $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.syllabuses.index');
    }

    public function getData()
    {

        $model = Syllabus::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('pdf', function (Syllabus $dpt) {
                return "<a href=" . url('upload/' . $dpt->pdf) . " target='_blank'>View</a>";
            })
            ->addColumn('actions', function (Syllabus $dpt) {
                return view('admin.syllabuses.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'pdf'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.syllabuses.create');
    }

    public function store(Request $request, Syllabus $model)
    {

        $this->validate($request, [
            'pdf' => 'required|mimes:pdf',
            'title' => 'required',
            'second_title' => 'required',
        ]);

        Syllabus::create([
            'pdf' => ($request->file('pdf')) ? $request->file('pdf')->store('Syllabuspdf', 'uploads') : NULL,
            'title' => $request->title,
            'second_title'=>$request->second_title,
            'small_title'=>$request->small_title
        ]);


        return redirect()->route('admin::syllabuses.index')->withStatus(__('Syllabus successfully created.'));
    }

    public function edit(Syllabus $syllabus)
    {
        return view('admin.syllabuses.edit', compact('syllabus'));
    }

    public function update(Request $request, Syllabus $syllabus)
    {
        $image = base_path('upload/' . $syllabus->pdf);


        $this->validate($request, [
            'pdf' => 'mimes:pdf',
            'title' => 'required',
            'second_title' => 'required',
        ]);

        if ($request->hasFile('pdf')) {
            if (is_file($image)) {
                unlink($image);
            }

            $syllabus->pdf = $request->file('pdf')->store('Syllabuspdf', 'uploads');
            $syllabus->save();
        }

        $syllabus->title = $request->title;
        $syllabus->second_title = $request->second_title;
        $syllabus->small_title = $request->small_title;
        $syllabus->save();

        return redirect()->route('admin::syllabuses.index')->withStatus(__('Syllabus successfully updated.'));
    }

    public function destroy(Syllabus $syllabus)
    {
        $image = base_path('upload/' . $syllabus->pdf);


        try {
            if (is_file($image)) {
                unlink($image);
            }
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $syllabus->delete();


        return redirect()->route('admin::syllabuses.index')->withStatus(__('Syllabus successfully deleted.'));
    }
}
