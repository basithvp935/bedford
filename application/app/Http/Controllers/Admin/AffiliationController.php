<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Affiliation;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class AffiliationController extends Controller
{
    public function index()
    {
        return view('admin.affiliations.index');
    }

    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $data = Affiliation::select(['id', 'title', 'date', 'pdf']);

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('actions', function($row){
                    $editUrl = route('admin::affiliations.edit', $row->id);
                    $deleteUrl = route('admin::affiliations.destroy', $row->id);

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
        return view('admin.affiliations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $affiliation = new Affiliation();
        $affiliation->title = $request->input('title');
        $affiliation->date = $request->input('date');

       if ($request->hasFile('pdf')) {
            if ($affiliation->pdf) {
                Storage::disk('uploads')->delete($affiliation->pdf);
            }
            $affiliation->pdf = $request->file('pdf')->store('AffiliationPdf', 'uploads');
        }

        $affiliation->save();

        return redirect()->route('admin::affiliations.index')->with('success', 'Resource created successfully.');
    }

    public function edit(Affiliation $affiliation)
    {
        return view('admin.affiliations.edit', compact('affiliation'));
    }

    public function update(Request $request, Affiliation $affiliation)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'date' => 'required|date',
            'pdf' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        $affiliation->title = $request->input('title');
        $affiliation->date = $request->input('date');

        if ($request->hasFile('pdf')) {
            if ($affiliation->pdf) {
                Storage::disk('uploads')->delete($affiliation->pdf);
            }
            $affiliation->pdf = $request->file('pdf')->store('AffiliationPdf', 'uploads');
        }

        $affiliation->save();

        return redirect()->route('admin::affiliations.index')->with('success', 'Affiliation updated successfully.');
    }

    public function destroy(Affiliation $affiliation)
    {
        if ($affiliation->pdf) {
            Storage::disk('uploads')->delete($affiliation->pdf);
        }

        $affiliation->delete();

        return redirect()->route('admin::affiliations.index')->with('success', 'Affiliation deleted successfully.');
    }
}
