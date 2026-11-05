<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\clientRequest;
use App\Models\Circular;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class CircularController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(client::class);
    }

    public function index(Circular $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.circulars.index');
    }

    public function getData()
    {

        $model = Circular::latest()->get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('pdf', function (Circular $dpt) {
                return "<a href=" . url('upload/' . $dpt->pdf) . " target='_blank'>View</a>";
            })
            ->addColumn('actions', function (Circular $dpt) {
                return view('admin.circulars.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'pdf'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.circulars.create');
    }

    public function store(Request $request, Circular $model)
    {

        $this->validate($request, [
            'pdf' => 'required|mimes:pdf',
            'title' => 'required',
            'date' => 'required|date',
        ]);

        Circular::create([
            'pdf' => ($request->file('pdf')) ? $request->file('pdf')->store('Circularpdf', 'uploads') : NULL,
            'title' => $request->title,
            'date'=>Carbon::parse($request->date)->format('Y-m-d'),
        ]);


        return redirect()->route('admin::circulars.index')->withStatus(__('Circular successfully created.'));
    }

    public function edit(Circular $circular)
    {
        return view('admin.circulars.edit', compact('circular'));
    }

    public function update(Request $request, Circular $circular)
    {
        $image = base_path('upload/' . $circular->pdf);


        $this->validate($request, [
            'pdf' => 'mimes:pdf',
            'title' => 'required',
            'date' => 'required|date',
        ]);

        if ($request->hasFile('pdf')) {
            if (is_file($image)) {
                unlink($image);
            }

            $circular->pdf = $request->file('pdf')->store('Circularpdf', 'uploads');
            $circular->save();
        }

        $circular->title = $request->title;
        $circular->date = Carbon::parse($request->date)->format('Y-m-d');
        $circular->save();

        return redirect()->route('admin::circulars.index')->withStatus(__('Circular successfully updated.'));
    }

    public function destroy(Circular $circular)
    {
        $image = base_path('upload/' . $circular->pdf);


        try {
            if (is_file($image)) {
                unlink($image);
            }
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $circular->delete();


        return redirect()->route('admin::circulars.index')->withStatus(__('Circular successfully deleted.'));
    }
}
