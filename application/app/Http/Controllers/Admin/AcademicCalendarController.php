<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\AcademicCalendar;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class AcademicCalendarController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(AcademicCalendar::class);

    }

    public function index(AcademicCalendar $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.academic_calendars.index');
    }

    public function getData()
    {
        $model = AcademicCalendar::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'actions',
                function (AcademicCalendar $dpt) {
                    return view('admin.academic_calendars.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.academic_calendars.create');
    }

    public function store(Request $request, AcademicCalendar $model)
    {

        $this->validate($request, [
            'title' => 'required|unique:academic_calendars',
            'date' => 'required|date',
        ]);


        AcademicCalendar::create(
            [

                'title' => $request->title,
                'date'=>Carbon::parse($request->date)->format('Y-m-d'),

            ]
        );

        return redirect()->route('admin::academic_calendars.index')->withStatus(__('Academic Calendar successfully created.'));
    }

    public function edit(AcademicCalendar $academic_calendar)
    {
        return view('admin.academic_calendars.edit', compact('academic_calendar'));
    }

    public function update(Request $request, AcademicCalendar $academic_calendar)
    {

        $this->validate($request, [
            'title' => 'required',
            'date' => 'required|date',
         ]);


        $academic_calendar->title = $request->title;

        $academic_calendar->date = Carbon::parse($request->date)->format('Y-m-d');

        $academic_calendar->save();

        return redirect()->route('admin::academic_calendars.index')->withStatus(__('Academic Calendar successfully updated.'));
    }

    public function destroy(AcademicCalendar $academic_calendar)
    {
        $academic_calendar->delete();

        return redirect()->route('admin::academic_calendars.index')->withStatus(__('Academic Calendar successfully deleted.'));
    }

    public function sortIndex()
    {
         return view('admin.academic_calendars.sort',[
            'academic_calendars'=>AcademicCalendar::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                AcademicCalendar::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
