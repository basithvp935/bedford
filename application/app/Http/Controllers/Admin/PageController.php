<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        return abort(403);
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $page = Page::where('title', 'LIKE', "%$keyword%")
                ->orWhere('heading', 'LIKE', "%$keyword%")
                ->orWhere('url', 'LIKE', "%$keyword%")
                ->orWhere('banner', 'LIKE', "%$keyword%")
                ->orWhere('content', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $page = Page::latest()->paginate($perPage);
        }

        return view('admin.page.index', compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.page.create');
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
			'title' => 'required',
			'heading' => 'required',
			'content' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',
		]);


        $requestData = $request->all();

        $page = Page::create($requestData);

        if ($request->hasFile('banner')) {
            $page->banner = $request->file('banner')->store('page_banners', 'uploads');
            $page->save();
        }

        $page->url = $this->toKebabCaseMethod($request->title);
        $page->save();

        return Redirect::back()->with('flash_message', 'Page added!');
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
        $page = Page::findOrFail($id);

        return view('admin.page.show', compact('page'));
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
        $page = Page::findOrFail($id);

        return view('admin.page.edit', compact('page'));
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
			'title' => 'required',
			'heading' => 'required',
			'content' => 'required'
		]);
        $requestData = $request->all();

        $page = Page::findOrFail($id);
        $page->update($requestData);

        $this->validate($request, [
            'content' => 'required',

        ]);


        $banner = url('upload/' . $page->banner);




        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }
            $page->banner = $request->file('banner')->store('page_banners', 'uploads');
            $page->save();
        }



        return Redirect::back()->with('flash_message', 'Page updated!');
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
        Page::destroy($id);

        return redirect('isgi-admin/page')->with('flash_message', 'Page deleted!');
    }

    function toKebabCaseMethod($inputString) {
        $words = explode(" ", $inputString);
        $kebabWords = array_map('strtolower', $words);
        return implode("-", $kebabWords);
    }
}
