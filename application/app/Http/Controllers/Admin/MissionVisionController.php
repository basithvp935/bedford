<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\MissionVision;
use App\Models\QualityEducationImage;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
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
            $missionvision = MissionVision::where('banner', 'LIKE', "%$keyword%")
                ->orWhere('heading1', 'LIKE', "%$keyword%")
                ->orWhere('description1', 'LIKE', "%$keyword%")
                ->orWhere('heading2', 'LIKE', "%$keyword%")
                ->orWhere('description2', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $missionvision = MissionVision::latest()->paginate($perPage);
        }

        return view('admin.mission-vision.index', compact('missionvision'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.mission-vision.create');
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
			'banner' => 'required',
			'heading1' => 'required',
			'description1' => 'required',
			'heading2' => 'required',
			'description2' => 'required'
		]);

        $requestData = $request->all();

        $data = MissionVision::create($requestData);

        $image       = MissionVision::find($data->id);
        if ($request->hasFile('banner')) {
            $image->banner = $request->file('banner')->store('mission', 'uploads');
            $image->save();
        }
        if ($request->hasFile('image1')) {
            $image->image1 = $request->file('image1')->store('mission', 'uploads');
            $image->save();
        }
        if ($request->hasFile('image2')) {
            $image->image2 = $request->file('image2')->store('mission', 'uploads');
            $image->save();
        }

        return redirect('isgi-admin/mission-vision')->with('flash_message', 'MissionVision added!');
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
        $missionvision = MissionVision::findOrFail($id);

        return view('admin.mission-vision.show', compact('missionvision'));
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
        $missionvision = MissionVision::findOrFail($id);

        return view('admin.mission-vision.edit', compact('missionvision'));
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

        $requestData = $request->all();

        $missionvision = MissionVision::findOrFail($id);
        $missionvision->update($requestData);

        $image       = MissionVision::find($id);
        if ($request->hasFile('banner')) {
            $image->banner = $request->file('banner')->store('mission', 'uploads');
            $image->save();
        }
        if ($request->hasFile('image1')) {
            $image->image1 = $request->file('image1')->store('mission', 'uploads');
            $image->save();
        }
        if ($request->hasFile('image2')) {
            $image->image2 = $request->file('image2')->store('mission', 'uploads');
            $image->save();
        }

        return redirect('isgi-admin/mission-vision/'.$id.'/edit')->with('flash_message', 'MissionVision updated!');
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
        MissionVision::destroy($id);

        return redirect('isgi-admin/mission-vision')->with('flash_message', 'MissionVision deleted!');
    }
}
