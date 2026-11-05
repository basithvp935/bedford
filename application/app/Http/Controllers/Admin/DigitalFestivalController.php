<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\DigitalFestival;
use App\Models\HomeDigitalFestival;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class DigitalFestivalController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(news::class);

    }

    public function index(DigitalFestival $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.digital_festival.index');
    }

    public function getData()
    {
        $model = DigitalFestival::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'img',
                function (DigitalFestival $dpt) {
                    return "<img src=" . url('upload/' . $dpt->img) . "  height='80' width='80'>";
                }
            )
            ->addColumn(
                'actions',
                function (DigitalFestival $dpt) {
                    return view('admin.digital_festival.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'img'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.digital_festival.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:digital_festivals',
            'description' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        DigitalFestival::create(
            [

                'title' => $request->title,
                'description' => $request->description,
                'img' => $request->file('img')->store('imgs', 'uploads')

            ]
        );

        return redirect()->route('admin::digital_festival.index')->withStatus(__('Digital Festival successfully created.'));
    }

    public function edit(DigitalFestival $digital_festival)
    {
        return view('admin.digital_festival.edit', compact('digital_festival'));
    }

    public function update(Request $request, DigitalFestival $digital_festival)
    {

        $this->validate($request, [
            'title' => 'required|unique:digital_festivals,title,' . $digital_festival->id . ',id',
            'description' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg'
         ]);

        $img = url('upload/' . $digital_festival->img);

        $digital_festival->title = $request->title;
        $digital_festival->description = $request->description;

        $digital_festival->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $digital_festival->img = $request->file('img')->store('imgs', 'uploads');

            $digital_festival->save();
        }
        return redirect()->route('admin::digital_festival.index')->withStatus(__('Digital Festival successfully updated.'));
    }

    public function destroy(DigitalFestival $digital_festival)
    {
        $img = url('upload/' . $digital_festival->img);


        try {
            if (is_file($img)) {
                unlink($img);
            }

        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $digital_festival->delete();

        return redirect()->route('admin::digital_festival.index')->withStatus(__('Digital Festival successfully deleted.'));
    }

     public function home_digital_festival_edit()
    {
        $home_digital_festival = HomeDigitalFestival::find(1);
        return view('admin.digital_festival.home', compact('home_digital_festival'));
    }

    public function home_digital_festival_update(Request $request , HomeDigitalFestival $home_digital_festival)
    {

        $this->validate($request, [
            'title' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg',
            'banner' => 'image|mimes:jpeg,png,jpg',
         ]);

        $img = url('upload/' . $home_digital_festival->img);
        $banner = url('upload/' . $home_digital_festival->banner);

        $home_digital_festival->title = $request->title;
        $home_digital_festival->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $home_digital_festival->img = $request->file('img')->store('imgs', 'uploads');

            $home_digital_festival->save();
        }

        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $home_digital_festival->banner = $request->file('banner')->store('news_banners', 'uploads');
            $home_digital_festival->save();
        }


        return redirect()->route('admin::home_digital_festival')->withStatus(__('Mentoring successfully updated.'));
    }
}
