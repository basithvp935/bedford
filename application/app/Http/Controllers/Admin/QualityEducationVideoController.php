<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\QualityEducationCategory;
use App\Models\QualityEducationVideo;
use Illuminate\Http\Request;

class QualityEducationVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $quality_education_id)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $qualityeducationvideo = QualityEducationVideo::where('quality_education_id', 'LIKE', "%$keyword%")
                ->orWhere('text', 'LIKE', "%$keyword%")
                ->orWhere('iframe', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $qualityeducationvideo = QualityEducationVideo::where('quality_education_id', $quality_education_id)->latest()->paginate($perPage);
        }

        return view('admin.quality-education-video.index', compact('qualityeducationvideo','quality_education_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($quality_education_id)
    {
        $categories = QualityEducationCategory::all();
        return view('admin.quality-education-video.create',compact('quality_education_id','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request, $quality_education_id)
    {
        $this->validate($request, [
			'text' => 'required',
			'iframe' => 'required'
		]);
        $request->request->add(['quality_education_id' => $quality_education_id]);
        $requestData = $request->all();

        QualityEducationVideo::create($requestData);

        return redirect("isgi-admin/quality-education/$quality_education_id/quality-education-video")->with('flash_message', 'QualityEducationImage added!');
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
        $qualityeducationvideo = QualityEducationVideo::findOrFail($id);

        return view('admin.quality-education-video.show', compact('qualityeducationvideo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($quality_education_id, $id)
    {
        $qualityeducationvideo = QualityEducationVideo::findOrFail($id);
        $categories = QualityEducationCategory::all();

        return view('admin.quality-education-video.edit', compact('qualityeducationvideo','quality_education_id','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request,  $quality_education_id,$id)
    {
        $this->validate($request, [
			'text' => 'required',
			'iframe' => 'required'
		]);
        $requestData = $request->all();

        $qualityeducationvideo = QualityEducationVideo::findOrFail($id);
        $qualityeducationvideo->update($requestData);

        return redirect("isgi-admin/quality-education/$quality_education_id/quality-education-video")->with('flash_message', 'QualityEducationImage updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($quality_education_id, $id)
    {
        QualityEducationVideo::destroy($id);
        return redirect("/isgi-admin/quality-education/$quality_education_id/quality-education-video/")->with('flash_message', 'Quality Education Video deleted!');
    }
}
