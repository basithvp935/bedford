<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\VideoGallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
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
            $videogallery = VideoGallery::where('iframe', 'LIKE', "%$keyword%")
                ->orWhere('description', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $videogallery = VideoGallery::latest()->paginate($perPage);
        }

        return view('admin.video-gallery.index', compact('videogallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.video-gallery.create');
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
			'iframe' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();

        VideoGallery::create($requestData);

        return redirect('isgi-admin/video-gallery')->with('flash_message', 'VideoGallery added!');
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
        $videogallery = VideoGallery::findOrFail($id);

        return view('admin.video-gallery.show', compact('videogallery'));
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
        $videogallery = VideoGallery::findOrFail($id);
        return view('admin.video-gallery.edit', compact('videogallery'));
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
			'iframe' => 'required',
			'description' => 'required'
		]);
        $requestData = $request->all();

        $videogallery = VideoGallery::findOrFail($id);
        $videogallery->update($requestData);

        return redirect('isgi-admin/video-gallery')->with('flash_message', 'VideoGallery updated!');
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
        VideoGallery::destroy($id);

        return redirect('isgi-admin/video-gallery')->with('flash_message', 'VideoGallery deleted!');
    }
}
