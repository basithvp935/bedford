<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AcademicResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AcademicResourceController extends Controller
{

    public function index(AcademicResource $model)
    {
        return view('admin.academic-resource.index');
    }

    public function getData()
    {
        $model = AcademicResource::get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('actions', function (AcademicResource $dpt) {
                return view('admin.academic-resource.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.academic-resource.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:academic_resources',
            'description' => 'required',
        ]);

        AcademicResource::create([
            'title'     => $request->title,
            'description' => $request->description,
          
        ]);
        return redirect()->route('admin::academic_resource.index')->withStatus(__('AcademicResource successfully created.'));
    }

    public function edit(AcademicResource $academic_resource)
    {
        return view('admin.academic-resource.edit', [
            'academic_resource' => $academic_resource
        ]);
    }

    public function update(Request $request, AcademicResource $academic_resource)
    {
        $this->validate($request, [
            'title' => 'required|unique:academic_resources,title,' . $academic_resource->id . ',id',
            'description' => 'required',
        ]);

        $academic_resource->title = $request->title;
        $academic_resource->description = $request->description;
        $academic_resource->save();
        return redirect()->route('admin::academic_resource.index')->withStatus(__('AcademicResource successfully updated.'));
    }

    public function destroy(AcademicResource $academic_resource)
    {
        $academic_resource->delete();
        return redirect()->route('admin::academic_resource.index')->withStatus(__('AcademicResource successfully deleted.'));
    }
}
