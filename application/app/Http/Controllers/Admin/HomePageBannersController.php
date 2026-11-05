<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HomeBannerRequest;
use App\Models\HomeBanner;
use App\Models\OtherBanner;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class HomePageBannersController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(HomeBanner::class);
    }

    public function index(HomeBanner $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.banners.index');
    }

    public function getData()
    {

        $model = HomeBanner::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('banner_image', function (HomeBanner $dpt) {
                return "<img src=" . url('upload/' . $dpt->banner_image) . "  height='80' width='80'>";
            })
            ->addColumn('actions', function (HomeBanner $dpt) {
                return view('admin.banners.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'banner_image'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {


        $this->validate($request, [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        try {
            HomeBanner::create([
                'banner_image' => ($request->file('banner_image')) ? $request->file('banner_image')->store('HomeBanner_images', 'uploads') : NULL,
                'text' => $request->text,
            ]);
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
            // return redirect()->back()->with($notification);
        }
        return redirect()->route('admin::banners.index')->withStatus(__('Banner successfully created.'));
    }

    public function edit(HomeBanner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, HomeBanner $home_banner)
    {
        $this->validate($request, [
            'banner_image' => 'image|mimes:jpeg,png,jpg',
        ]);

        $HomeBanner_image = base_path('upload/' . $home_banner->banner_image);
        $home_banner->text = $request->text;
        $home_banner->save();

        if ($request->hasFile('banner_image')) {
            if (is_file($HomeBanner_image)) {
                unlink($HomeBanner_image);
            }

            $home_banner->banner_image = $request->file('banner_image')->store('HomeBanner_images', 'uploads');
            $home_banner->save();
        }


        return redirect()->route('admin::banners.index')->withStatus(__('Banner successfully updated.'));
    }

    public function destroy(HomeBanner $home_banner)
    {
        $HomeBanner_image = base_path('upload/' . $home_banner->banner_image);
        try {
            if ($HomeBanner_image) {
                unlink($HomeBanner_image);
            }
        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
            // return redirect()->back()->with($notification);
        }

        $home_banner->delete();

        return redirect()->route('admin::banners.index')->withStatus(__('Banner successfully deleted.'));
    }


     public function other_banners_edit()
    {
        $other_banner = OtherBanner::find(1);
        return view('admin.other_banner.edit', compact('other_banner'));
    }

    public function other_banners_update(Request $request , OtherBanner $other_banner)
    {

        $this->validate($request, [
            'management_committees_banner' => 'image|mimes:jpeg,png,jpg',
            'management_committees_small_banner' => 'image|mimes:jpeg,png,jpg',

            'school_timings_banner' => 'image|mimes:jpeg,png,jpg',
            'school_timings_small_banner' => 'image|mimes:jpeg,png,jpg',

            'contact_us_banner' => 'image|mimes:jpeg,png,jpg',
            'contact_us_small_banner' => 'image|mimes:jpeg,png,jpg',
            'school_rules' => 'required|max:10000|mimes:pdf',
         ]);

        $management_committees_banner = url('upload/' . $other_banner->banner);
        $management_committees_small_banner = url('upload/' . $other_banner->small_banner);

        $school_timings_banner = url('upload/' . $other_banner->school_timings_banner);
        $school_timings_small_banner = url('upload/' . $other_banner->school_timings_small_banner);

        $contact_us_banner = url('upload/' . $other_banner->contact_us_banner);
        $contact_us_small_banner = url('upload/' . $other_banner->contact_us_small_banner);
        $school_rules = url('upload/' . $other_banner->school_rules);

        if ($request->hasFile('school_rules')) {
            if (is_file($school_rules)) {
                unlink($school_rules);
            }

            $other_banner->school_rules = $request->file('school_rules')->store('school_rules', 'uploads');

            $other_banner->save();
        }

        if ($request->hasFile('management_committees_banner')) {
            if (is_file($management_committees_banner)) {
                unlink($management_committees_banner);
            }

            $other_banner->management_committees_banner = $request->file('management_committees_banner')->store('management_committees_banner', 'uploads');

            $other_banner->save();
        }

         if ($request->hasFile('management_committees_small_banner')) {
            if (is_file($management_committees_small_banner)) {
                unlink($management_committees_small_banner);
            }

            $other_banner->management_committees_small_banner = $request->file('management_committees_small_banner')->store('management_committees_small_banner', 'uploads');

            $other_banner->save();
        }


        if ($request->hasFile('school_timings_banner')) {
            if (is_file($school_timings_banner)) {
                unlink($school_timings_banner);
            }

            $other_banner->school_timings_banner = $request->file('school_timings_banner')->store('school_timings_banner', 'uploads');

            $other_banner->save();
        }

         if ($request->hasFile('school_timings_small_banner')) {
            if (is_file($school_timings_small_banner)) {
                unlink($school_timings_small_banner);
            }

            $other_banner->school_timings_small_banner = $request->file('school_timings_small_banner')->store('school_timings_small_banner', 'uploads');

            $other_banner->save();
        }

        if ($request->hasFile('contact_us_banner')) {
            if (is_file($contact_us_banner)) {
                unlink($contact_us_banner);
            }

            $other_banner->contact_us_banner = $request->file('contact_us_banner')->store('contact_us_banner', 'uploads');

            $other_banner->save();
        }

         if ($request->hasFile('contact_us_small_banner')) {
            if (is_file($contact_us_small_banner)) {
                unlink($contact_us_small_banner);
            }

            $other_banner->contact_us_small_banner = $request->file('contact_us_small_banner')->store('contact_us_small_banner', 'uploads');

            $other_banner->save();
        }


        return redirect()->route('admin::other_banners')->withStatus(__('Other Banners successfully updated.'));
    }

      public function sortIndex()
    {
         return view('admin.banners.sort',[
            'banners'=>HomeBanner::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                HomeBanner::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
