<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\QualityEducationCategory;
use Illuminate\Http\Request;

class QualityEducationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $quality_education_category = QualityEducationCategory::where('name', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $quality_education_category = QualityEducationCategory::orderby('priority')->paginate($perPage);
        }

        return view('admin.quality_education_category.index', compact('quality_education_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $count = QualityEducationCategory::count();
        return view('admin.quality_education_category.create',compact('count'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'name' => 'required',
			'description' => 'required',
		]);
        $requestData = $request->all();

        $QualityEducationCategory = QualityEducationCategory::create($requestData);


        $QualityEducationCategory->save();
        return redirect('isgi-admin/quality_education_category')->with('flash_message', 'QualityEducationCategory added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $quality_education_category = QualityEducationCategory::findOrFail($id);

        return view('admin.quality_education_category.show', compact('quality_education_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $quality_education_category = QualityEducationCategory::findOrFail($id);
        $count = QualityEducationCategory::count();
        return view('admin.quality_education_category.edit', compact('quality_education_category','count'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
			'name' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();

        $quality_education_category = QualityEducationCategory::findOrFail($id);
        $quality_education_category->update($requestData);


        $quality_education_category->save();

        return redirect('isgi-admin/quality_education_category')->with('flash_message', 'QualityEducationCategory updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        QualityEducationCategory::destroy($id);

        return redirect('isgi-admin/quality_education_category')->with('flash_message', 'QualityEducationCategory deleted!');
    }
}
