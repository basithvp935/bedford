<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\QualityEducation;
use Illuminate\Http\Request;

class QualityEducationController extends Controller
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
            $qualityeducation = QualityEducation::where('heading', 'LIKE', "%$keyword%")
                ->orWhere('title', 'LIKE', "%$keyword%")
                ->orWhere('text', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('banner', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $qualityeducation = QualityEducation::latest()->paginate($perPage);
        }

        return view('admin.quality-education.index', compact('qualityeducation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.quality-education.create');
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
			'heading' => 'required',
			'text' => 'required',
			'banner' => 'required',
			'image' => 'required',
		]);
        $requestData = $request->all();

        $QualityEducation = QualityEducation::create($requestData);

        if ($request->hasFile('banner')) {
            $QualityEducation->banner = $request->file('banner')->store('quality', 'uploads');
        }if ($request->hasFile('image')) {
            $QualityEducation->image = $request->file('image')->store('quality', 'uploads');
        }
        $QualityEducation->save();
        return redirect('isgi-admin/quality-education')->with('flash_message', 'QualityEducation added!');
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
        $qualityeducation = QualityEducation::findOrFail($id);

        return view('admin.quality-education.show', compact('qualityeducation'));
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
        $qualityeducation = QualityEducation::findOrFail($id);

        return view('admin.quality-education.edit', compact('qualityeducation'));
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
			'heading' => 'required',
			'text' => 'required'
		]);
        $requestData = $request->all();

        $qualityeducation = QualityEducation::findOrFail($id);
        $qualityeducation->update($requestData);

        if ($request->hasFile('banner')) {
            $qualityeducation->banner = $request->file('banner')->store('quality', 'uploads');
        }if ($request->hasFile('image')) {
        $qualityeducation->image = $request->file('image')->store('quality', 'uploads');
    }
        $qualityeducation->save();

        return redirect('isgi-admin/quality-education')->with('flash_message', 'QualityEducation updated!');
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
        QualityEducation::destroy($id);

        return redirect('isgi-admin/quality-education')->with('flash_message', 'QualityEducation deleted!');
    }
}
