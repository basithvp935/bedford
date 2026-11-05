<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\clientRequest;
use App\Models\Result;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ResultsController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(client::class);
    }

    public function index(Result $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.results.index');
    }

    public function getData()
    {

        $model = Result::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('pdf', function (Result $dpt) {
                return "<a href=" . url('upload/' . $dpt->pdf) . " target='_blank'>View</a>";
            })
            ->addColumn('actions', function (Result $dpt) {
                return view('admin.results.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'pdf'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.results.create');
    }

    public function store(Request $request, Result $model)
    {

        $this->validate($request, [
            'pdf' => 'required|mimes:pdf',
            'title' => 'required',
        ]);

        Result::create([
            'pdf' => ($request->file('pdf')) ? $request->file('pdf')->store('Resultpdf', 'uploads') : NULL,
            'title' => $request->title
        ]);


        return redirect()->route('admin::results.index')->withStatus(__('Result successfully created.'));
    }

    public function edit(Result $result)
    {
        return view('admin.results.edit', compact('result'));
    }

    public function update(Request $request, Result $result)
    {
        $image = base_path('upload/' . $result->pdf);


        $this->validate($request, [
            'pdf' => 'mimes:pdf',
            'title' => 'required',
        ]);

        if ($request->hasFile('pdf')) {
            if (is_file($image)) {
                unlink($image);
            }

            $result->pdf = $request->file('pdf')->store('Resultpdf', 'uploads');
            $result->save();
        }

        $result->title = $request->title;
        $result->save();

        return redirect()->route('admin::results.index')->withStatus(__('Result successfully updated.'));
    }

    public function destroy(Result $result)
    {
        $image = base_path('upload/' . $result->pdf);


        try {
            if (is_file($image)) {
                unlink($image);
            }
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $result->delete();


        return redirect()->route('admin::results.index')->withStatus(__('Result successfully deleted.'));
    }
}
