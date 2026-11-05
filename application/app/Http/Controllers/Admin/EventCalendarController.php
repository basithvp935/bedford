<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\EventCalendar;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class EventCalendarController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(EventCalendar::class);

    }

    public function index(EventCalendar $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.event_calendars.index');
    }

    public function getData()
    {
        $model = EventCalendar::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'actions',
                function (EventCalendar $dpt) {
                    return view('admin.event_calendars.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.event_calendars.create');
    }

    public function store(Request $request, EventCalendar $model)
    {

        $this->validate($request, [
            'title' => 'required|unique:event_calendars',
            'date' => 'required|date',
            'content' => 'required',
            'banner' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        EventCalendar::create(
            [

                'title' => $request->title,
                'content'=>$request->content,
                'date'=>Carbon::parse($request->date)->format('Y-m-d'),
                'event_calendar_slug' => Str::slug($request->title),
                'banner' => $request->file('banner')->store('banner', 'uploads'),

            ]
        );

        return redirect()->route('admin::event_calendars.index')->withStatus(__('Event Calendar successfully created.'));
    }

    public function edit(EventCalendar $event_calendar)
    {
        return view('admin.event_calendars.edit', compact('event_calendar'));
    }

    public function update(Request $request, EventCalendar $event_calendar)
    {

        $this->validate($request, [
            'title' => 'required',
            'date' => 'required|date',
            'content' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',
         ]);


         
        $banner = url('upload/' . $event_calendar->banner);

        $event_calendar->title = $request->title;

        $event_calendar->content = $request->content;

        $event_calendar->event_calendar_slug = Str::slug($request->title);

        $event_calendar->date = Carbon::parse($request->date)->format('Y-m-d');

        $event_calendar->save();



        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $event_calendar->banner = $request->file('banner')->store('event_calendar_banners', 'uploads');

            $event_calendar->save();
        }

        return redirect()->route('admin::event_calendars.index')->withStatus(__('Event Calendar successfully updated.'));
    }

    public function destroy(EventCalendar $event_calendar)
    {

        $banner = url('upload/' . $event_calendar->banner);


        try {

            if (is_file($banner)) {
                unlink($banner);
            }
        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }
        
        $event_calendar->delete();

        return redirect()->route('admin::event_calendars.index')->withStatus(__('Event Calendar successfully deleted.'));
    }

    public function sortIndex()
    {
         return view('admin.event_calendars.sort',[
            'event_calendars'=>EventCalendar::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                EventCalendar::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
