<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\QualityEducationCategory;
use App\Models\QualityEducationImage;
use Illuminate\Http\Request;

class QualityEducationImageController extends Controller
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
            $qualityeducationimage = QualityEducationImage::where('quality_education_id', $quality_education_id)
                                                          ->orWhere('text', 'LIKE', "%$keyword%")
                                                          ->orWhere('image', 'LIKE', "%$keyword%")
                                                          ->latest()->paginate($perPage);
        } else {
            $qualityeducationimage = QualityEducationImage::where('quality_education_id', $quality_education_id)->latest()->paginate($perPage);
        }

        return view('admin.quality-education-image.index', compact('qualityeducationimage', 'quality_education_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($quality_education_id)
    {
        $categories = QualityEducationCategory::all();
        return view('admin.quality-education-image.create', compact('quality_education_id','categories'));
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
            'image' => 'required',
        ]);
        $request->request->add(['quality_education_id' => $quality_education_id]);
        $requestData = $request->all();
        $data        = QualityEducationImage::create($requestData);
        $image       = QualityEducationImage::find($data->id);
        if ($request->hasFile('image')) {
            $image->image = $request->file('image')->store('quality', 'uploads');
            $image->save();
        }


        return redirect("isgi-admin/quality-education/$quality_education_id/quality-education-image")->with('flash_message', 'QualityEducationImage added!');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $qualityeducationimage = QualityEducationImage::findOrFail($id);

        return view('admin.quality-education-image.show', compact('qualityeducationimage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($quality_education_id, $id)
    {
        $qualityeducationimage = QualityEducationImage::findOrFail($id);
        $categories = QualityEducationCategory::all();

        return view('admin.quality-education-image.edit', compact('qualityeducationimage','quality_education_id','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request,  $quality_education_id,$id)
    {

        $requestData = $request->all();

        $qualityeducationimage = QualityEducationImage::findOrFail($id);
        $qualityeducationimage->update($requestData);

        if ($request->hasFile('image')) {
            $qualityeducationimage->image = $request->file('image')->store('quality', 'uploads');
            $qualityeducationimage->save();
        }

        return redirect("isgi-admin/quality-education/$quality_education_id/quality-education-image")->with('flash_message', 'QualityEducationImage updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($quality_education_id, $id)
    {
        QualityEducationImage::destroy($id);

        return redirect("/isgi-admin/quality-education/$quality_education_id/quality-education-image/")->with('flash_message', 'QualityEducationImage deleted!');
    }
}
