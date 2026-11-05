<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Qualification;
use App\Models\QualificationCategory;
use App\Models\CareerQualification;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Support\Str;

class CareerController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Career::class);
    }

    public function index(Career $model)
    {
        // $this->authorize('manage-items', User::class);
        return view('admin.career.index');
    }

    public function getData()
    {
        $model = Career::get();
        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('actions', function (Career $dpt) {
                return view('admin.career.actions', ['dpt' => $dpt])->render();
            })
            ->addColumn('category', function ($career) {
                return $career->category == 0 ? 'Non Teaching' : 'Teaching';
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function create()
    {
        $qualifications = Qualification::all();
        $qualificationCategories = QualificationCategory::all();
        return view('admin.career.create', [
                'qualifications' => $qualifications,
                'qualificationCategories' => $qualificationCategories,
        ]);
    }

    public function store(Request $request, Career $model)
    {
        $this->validate($request, [
            'title' => 'required|unique:tbl_careers',
            'description' => 'required',
        ]);

        $career = Career::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'category' => $request->category,
            'career_slug' => Str::slug($request->title),
            'description' => $request->description,
        ]);
            
        if(count($request->qualification) != 0){
            for($i = 0; $i < count($request->qualification); $i++ )
            {
                CareerQualification::create([
                    'career' => $career->id,
                    'qualification' => $request->qualification[$i],
                ]);        
            }
        }
        
        return redirect()->route('admin::careers.index')->withStatus(__('Career successfully created.'));
    }

    public function edit(Career $career)
    {
        
        $qualifications = Qualification::all();
        $qualificationCategories = QualificationCategory::all();
        $careerQualification = CareerQualification::where('career', $career->id)->get();
        return view('admin.career.edit', [
            'career' => $career,
            'qualifications' => $qualifications,
            'qualificationCategories' => $qualificationCategories,
            'careerQualification' => $careerQualification,
        ]);
    }

    public function update(Request $request, Career $career)
    {
        $this->validate($request, [
            'title' => 'required|unique:tbl_careers,title,' . $career->id . ',id',
            'description' => 'required',
        ]);

        $career->title = $request->title;
        $career->sub_title = $request->sub_title;
        $career->category = $request->category;
        $career->career_slug = Str::slug($request->title);
        $career->date = Carbon::parse($request->date)->format('Y-m-d');
        $career->description = $request->description;
        $career->save();
        
        $cq = CareerQualification::where('career', $career->id)->get();
        if(count($cq) != 0){
            foreach($cq as $l)
            {
                CareerQualification::destroy($l->id);
            }
        }
        
        if(count($request->qualification) != 0){
            for($i = 0; $i < count($request->qualification); $i++ )
            {
                CareerQualification::create([
                    'career' => $career->id,
                    'qualification' => $request->qualification[$i],
                ]);        
            }
        }
        return redirect()->route('admin::careers.index')->withStatus(__('Career successfully updated.'));
    }

    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('admin::careers.index')->withStatus(__('Career successfully deleted.'));
    }
}
