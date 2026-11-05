<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;

use App\Models\Facility;

use App\Models\HomeFacility;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class FacilityController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(news::class);

    }

    public function index(Facility $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.facilitys.index');
    }

    public function getData()
    {
        $model = Facility::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'img',
                function (Facility $dpt) {
                    return "<img src=" . url('upload/' . $dpt->img) . "  height='80' width='80'>";
                }
            )
            ->addColumn(
                'actions',
                function (Facility $dpt) {
                    return view('admin.facilitys.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'img'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.facilitys.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:facilities',
            'small_description' => 'required',
            'priority' => 'required',
            'content' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        Facility::create(
            [

                'title' => $request->title,
                'small_description' => $request->small_description,
                'priority' => $request->priority,
                'content' => $request->content,
                'img' => $request->file('img')->store('imgs', 'uploads')

            ]
        );

        return redirect()->route('admin::facilities.index')->withStatus(__('Facility successfully created.'));
    }

    public function edit(Facility $facility)
    {
        return view('admin.facilitys.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility)
    {

        $this->validate($request, [
            'title' => 'required|unique:facilities,title,' . $facility->id . ',id',
            'content' => 'required',
            'small_description' => 'required',
            'priority' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg'
         ]);

        $img = url('upload/' . $facility->img);

        $facility->title = $request->title;
        $facility->small_description = $request->small_description;
        $facility->priority = $request->priority;

        $facility->content = $request->content;

        $facility->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $facility->img = $request->file('img')->store('imgs', 'uploads');

            $facility->save();
        }
        return redirect()->route('admin::facilities.index')->withStatus(__('Facility successfully updated.'));
    }

    public function destroy(Facility $facility)
    {
        $img = url('upload/' . $facility->img);


        try {
            if (is_file($img)) {
                unlink($img);
            }

        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $facility->delete();

        return redirect()->route('admin::facilities.index')->withStatus(__('Facility successfully deleted.'));
    }

     public function home_facility_edit()
    {
        $home_facility = HomeFacility::find(1);
        return view('admin.facilitys.home', compact('home_facility'));
    }

    public function home_facility_update(Request $request , HomeFacility $home_facility)
    {

        $this->validate($request, [
            'title' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg',
            'banner' => 'image|mimes:jpeg,png,jpg',
         ]);

        $img = url('upload/' . $home_facility->img);
        $banner = url('upload/' . $home_facility->banner);

        $home_facility->title = $request->title;
        $home_facility->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $home_facility->img = $request->file('img')->store('imgs', 'uploads');

            $home_facility->save();
        }

        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $home_facility->banner = $request->file('banner')->store('news_banners', 'uploads');
            $home_facility->save();
        }


        return redirect()->route('admin::home_facility')->withStatus(__('Mentoring successfully updated.'));
    }
}
