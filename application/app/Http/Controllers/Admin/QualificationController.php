<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QualificationCategory;
use App\Models\Qualification;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Support\Str;

class QualificationController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Qualification::class);
    }

    public function index(Qualification $model)
    {
        // $this->authorize('manage-items', User::class);
        return view('admin.qualification.index');
    }

    public function getData()
    {
        $model = Qualification::get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('actions', function (Qualification $dpt) {
                return view('admin.qualification.actions', ['dpt' => $dpt])->render();
            })
            ->addColumn('category', function ($category) {
                $cat = QualificationCategory::find($category->category);
                return $cat->title;
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function create()
    {
        $category = QualificationCategory::all();
        return view('admin.qualification.create', compact('category'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:qualifications',
            'category' => 'required',
        ]);

        Qualification::create([
            'title'     => $request->title,
            'category'  => $request->category
        ]);
        return redirect()->route('admin::qualification.index')->withStatus(__('Qualification successfully created.'));
    }

    public function edit(Qualification $qualification)
    {
        
        $category = QualificationCategory::all();
        return view('admin.qualification.edit', [
            'qualification' => $qualification,
            'category' => $category
        ]);
    }

    public function update(Request $request, Qualification $qualification)
    {
        $this->validate($request, [
            'title' => 'required|unique:qualifications,title,' . $qualification->id . ',id',
            'category' => 'required',
        ]);

        $qualification->title = $request->title;
        $qualification->category = $request->category;
        $qualification->save();
        return redirect()->route('admin::qualification.index')->withStatus(__('Qualification successfully updated.'));
    }

    public function destroy(Qualification $qualification)
    {
        $qualification->delete();
        return redirect()->route('admin::qualification.index')->withStatus(__('Qualification successfully deleted.'));
    }
}
