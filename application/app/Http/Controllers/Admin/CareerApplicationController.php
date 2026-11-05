<?php



namespace App\Http\Controllers\Admin;

use App\Exports\CareerApplicationsCsvExport;
use App\Exports\CareerApplicationsExport;
use App\Http\Controllers\Controller;
use App\Models\Career;
use App\Models\Qualification;
use App\Models\QualificationCategory;
use App\Models\CareerApplication;

use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

use Illuminate\Support\Str;

class CareerApplicationController extends Controller

{
    public function index(CareerApplication $model)
    {
        $careers = Career::all();
        $uniquQuqlifications = CareerApplication::where('is_archived', 0)->select('qualification')->get()->unique('qualification');
        $ids = [];
        foreach($uniquQuqlifications as $uq){
            $ids[] = $uq->qualification;
        }
        $qualifications = Qualification::whereIn('id', $ids)->get();
        $qualificationCategories= QualificationCategory::all();
        return view('admin.career_application.index', compact('careers', 'qualifications', 'qualificationCategories'));
    }
    
    public function test(CareerApplication $model)
    {
        
        $careers = Career::all();
        $uniquQuqlifications = CareerApplication::where('is_archived', 0)->select('qualification')->get()->unique('qualification');
        $ids = [];
        foreach($uniquQuqlifications as $uq){
            $ids[] = $uq->qualification;
        }
        $qualifications = Qualification::whereIn('id', $ids)->get();
        $qualificationCategories= QualificationCategory::all();
        echo '<pre>';
        print_r($ids);
        echo '</pre>';
        
        foreach($qualifications as $q){
            echo $q->id . ' - ' . $q->title .'<br>';
        }
    }
    
    public function archived(CareerApplication $model)
    {
        $careers = Career::all();   
        return view('admin.career_application.archive', compact('careers'));
    }


    public function exportExcel(Request $request)
    {
        $careerSlug = $request->query('career_slug', '');
        $archived = $request->query('archived');
        return Excel::download(new CareerApplicationsExport($careerSlug, $archived), 'career_applications.xlsx',\Maatwebsite\Excel\Excel::XLSX);
    }

    public function exportCsv(Request $request)
    {
        $careerSlug = $request->query('career_slug', '');
        $archived = $request->query('archived');
        return Excel::download(new CareerApplicationsCsvExport($careerSlug, $archived), 'career_applications.csv',\Maatwebsite\Excel\Excel::CSV);
    }

    public function getData()
    {
        $query = CareerApplication::query();

        if ($careerSlug = request()->get('career_slug')) {
            $query->whereHas('getCareer', function($q) use ($careerSlug) {
                $q->where('title', $careerSlug);
            });
        }
        if ($qualification = request()->get('qualification')) {
            $query->where('qualification', $qualification);
        }
        if ($experience = request()->get('experience')) {
            $query->where('years_experience', $experience);
        }

        $showAll = request()->has('show_all') && request()->get('show_all') == 'true';

        if ($showAll) {
            $model = $query->orderBy('created_at', 'desc')->where('is_archived', 0)->get();
            return DataTables::of($model)
                ->addIndexColumn()
                ->addColumn('career', function($model) {
                    return $model->getCareer->title ?? '-';
                })
                ->addColumn('qualification', function($model) {
                    $qualification = Qualification::find($model->qualification);
                    return $qualification->title ?? '-';
                })
                ->addColumn('cv', function ($model) {
                    return '<a href="' . url('uploads/cv/' . $model->cv) . '" target="_blank" rel="noopener noreferrer">View</a>';
                })
                ->addColumn('actions', function (CareerApplication $dpt) {
                    return view('admin.career_application.actions', ['dpt' => $dpt])->render();
                })
                ->addColumn('on', function($model) {
                    return date('Y-m-d h:i A', strtotime($model->created_at));
                })
                ->removeColumn('id', 'updated_at')
                ->rawColumns(['actions', 'cv'])
                ->toJson();
        } else {
            return DataTables::of($query->orderBy('created_at', 'desc')->where('is_archived', 0))
                ->addIndexColumn()
                ->addColumn('career', function($model) {
                    return $model->getCareer->title ?? '-';
                })
                ->addColumn('qualification', function($model) {
                    $qualification = Qualification::find($model->qualification);
                    return $qualification->title ?? '-';
                })
                ->addColumn('cv', function ($model) {
                    return '<a href="' . url('uploads/cv/' . $model->cv) . '" target="_blank" rel="noopener noreferrer">View</a>';
                })
                ->addColumn('actions', function (CareerApplication $dpt) {
                    return view('admin.career_application.actions', ['dpt' => $dpt])->render();
                })
                ->addColumn('on', function($model) {
                    return date('Y-m-d h:i A', strtotime($model->created_at));
                })
                ->removeColumn('id', 'updated_at')
                ->rawColumns(['actions', 'cv'])
                ->toJson();
        }
    }
    
    
    public function getDetails($id)
    {
     $application = CareerApplication::select('career_applications.*', 'tbl_careers.title as career', 'qualifications.title as qualification')->join('tbl_careers', 'tbl_careers.id', '=', 'career_applications.career_id')->join('qualifications', 'qualifications.id', '=', 'career_applications.qualification')->where('career_applications.id', $id)->first();
     return json_encode($application);
    }
    
    public function archivedData()
    {
        $query = CareerApplication::query();

        if ($careerSlug = request()->get('career_slug')) {
            $query->whereHas('getCareer', function($q) use ($careerSlug) {
                $q->where('title', $careerSlug);
            });
        }

        $showAll = request()->has('show_all') && request()->get('show_all') == 'true';

        if ($showAll) {
            $model = $query->orderBy('created_at', 'desc')->where('is_archived', 1)->get();
            return DataTables::of($model)
                ->addIndexColumn()
                ->addColumn('career', function($model) {
                    return $model->getCareer->title ?? '-';
                })
                ->addColumn('cv', function ($model) {
                    return '<a href="' . url('uploads/cv/' . $model->cv) . '" target="_blank" rel="noopener noreferrer">View</a>';
                })
                ->addColumn('actions', function (CareerApplication $dpt) {
                    return view('admin.career_application.actions', ['dpt' => $dpt])->render();
                })
                ->addColumn('on', function($model) {
                    return date('Y-m-d h:i A', strtotime($model->created_at));
                })
                ->removeColumn('id', 'updated_at')
                ->rawColumns(['actions', 'cv'])
                ->toJson();
        } else {
            return DataTables::of($query->orderBy('created_at', 'desc')->where('is_archived', 1))
                ->addIndexColumn()
                ->addColumn('career', function($model) {
                    return $model->getCareer->title ?? '-';
                })
                ->addColumn('cv', function ($model) {
                    return '<a href="' . url('uploads/cv/' . $model->cv) . '" target="_blank" rel="noopener noreferrer">View</a>';
                })
                ->addColumn('actions', function (CareerApplication $dpt) {
                    return view('admin.career_application.actions', ['dpt' => $dpt])->render();
                })
                ->addColumn('on', function($model) {
                    return date('Y-m-d h:i A', strtotime($model->created_at));
                })
                ->removeColumn('id', 'updated_at')
                ->rawColumns(['actions', 'cv'])
                ->toJson();
        }
    }

    public function create()
    {
        return view('admin.career_application.create');
    }

    public function store(Request $request, CareerApplication $model)
    {}

    public function edit(CareerApplication $career_application)
    {}

    public function update(Request $request, CareerApplication $career_application)
    {}

    public function destroy(CareerApplication $career_application)
    {
        $career_application->delete();
        return redirect()->route('admin::career_applications.index')->withStatus(__('Application successfully deleted.'));
    }
}
