<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeesStructure;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class FeesStructureController extends Controller
{
    public function index()
    {
        return view('admin.fees_structures.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = FeesStructure::select(['id', 'title', 'pdf']);

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('actions', function($row){
                    $editUrl = route('admin::fees-structures.edit', $row->id);
                    $deleteUrl = route('admin::fees-structures.destroy', $row->id);

                    return '<a href="' . $editUrl . '" class="btn btn-sm btn-warning">Edit</a>
                            <form action="' . $deleteUrl . '" method="POST" style="display:inline;">
                                <input type="hidden" name="_token" value="' . csrf_token() . '">
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure?\')">Delete</button>
                            </form>';
                })
                ->editColumn('pdf', function($row) {
                    return $row->pdf ? '<a href="' . url('upload/' . $row->pdf) . '" target="_blank">View File</a>' : 'No File';
                })
                ->rawColumns(['actions', 'pdf'])
                ->make(true);
        }
    }


    public function create()
    {
        return view('admin.fees_structures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $feesStructure = new FeesStructure();
        $feesStructure->title = $request->input('title');

        if ($request->hasFile('pdf')) {
            $feesStructure->pdf = $request->file('pdf')->store('FeesStructurePdf', 'uploads');
        }

        $feesStructure->save();

        return redirect()->route('admin::fees-structures.index')->with('success', 'Resource created successfully.');
    }

    public function edit(FeesStructure $feesStructure)
    {
        return view('admin.fees_structures.edit', compact('feesStructure'));
    }

    public function update(Request $request, FeesStructure $feesStructure)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $feesStructure->title = $request->input('title');

        if ($request->hasFile('pdf')) {
            if ($feesStructure->pdf) {
                Storage::disk('uploads')->delete($feesStructure->pdf);
            }
            $feesStructure->pdf = $request->file('pdf')->store('FeesStructurePdf', 'uploads');
        }

        $feesStructure->save();

        return redirect()->route('admin::fees-structures.index')->with('success', 'Fees Structure updated successfully.');
    }

    public function destroy(FeesStructure $feesStructure)
    {
        if ($feesStructure->pdf) {
            Storage::disk('uploads')->delete($feesStructure->pdf);
        }

        $feesStructure->delete();

        return redirect()->route('admin::fees-structures.index')->with('success', 'Fees Structure deleted successfully.');
    }
}


