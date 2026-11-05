<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resource;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ResourceController extends Controller
{

    public function index(Resource $model)
    {
        return view('admin.resource.index');
    }

    public function getData()
    {
        $model = Resource::get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('actions', function (Resource $dpt) {
                return view('admin.resource.actions', ['dpt' => $dpt])->render();
            })
            ->addColumn('category', function ($model) {
                return ($model->category == 0) ? 'Parent' : 'Student';
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.resource.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:resources',
            'description' => 'required',
            'category' => 'required',
        ]);

        Resource::create([
            'title'     => $request->title,
            'description' => $request->description,
            'category'  => $request->category
        ]);
        return redirect()->route('admin::resource.index')->withStatus(__('Resource successfully created.'));
    }

    public function edit(Resource $resource)
    {
        return view('admin.resource.edit', [
            'resource' => $resource
        ]);
    }

    public function update(Request $request, Resource $resource)
    {
        $this->validate($request, [
            'title' => 'required|unique:resources,title,' . $resource->id . ',id',
            'description' => 'required',
            'category' => 'required',
        ]);

        $resource->title = $request->title;
        $resource->description = $request->description;
        $resource->category = $request->category;
        $resource->save();
        return redirect()->route('admin::resource.index')->withStatus(__('Resource successfully updated.'));
    }

    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect()->route('admin::resource.index')->withStatus(__('Resource successfully deleted.'));
    }
}
