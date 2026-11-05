<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;

use App\Models\Department;
use App\Models\Faculty;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class FacultyController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(news::class);

    }

    public function index(Faculty $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.faculties.index');
    }

    public function getData()
    {
        $model = Faculty::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'img',
                function (Faculty $dpt) {
                    return "<img src=" . url('upload/' . $dpt->img) . "  height='80' width='80'>";
                }
            )
            ->addColumn(
                'actions',
                function (Faculty $dpt) {
                    return view('admin.faculties.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'img'])
            ->toJson();
    }

    public function create()
    {
        $departments = Department::all();
        return view('admin.faculties.create',compact('departments'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:faculties',
            'designation' => 'required',
            'small_description' => 'required',
        ]);


        $faculty = Faculty::create(
            [

                'name' => $request->name,
                'small_description' => $request->small_description,
                'department_id' => $request->department_id,

            ]
        );

        if ($request->hasFile('img')) {
            $faculty->img = $request->file('img')->store('imgs', 'uploads');
            $faculty->save();
        }

        return redirect()->route('admin::faculties.index')->withStatus(__('Faculty successfully created.'));
    }

    public function edit(Faculty $faculty)
    {

        $departments = Department::all();
        return view('admin.faculties.edit', compact('faculty','departments'));
    }

    public function update(Request $request, Faculty $faculty)
    {

        $this->validate($request, [
            'name' => 'required|unique:faculties,name,' . $faculty->id . ',id',
            'small_description' => 'required'
         ]);

        $img = url('upload/' . $faculty->img);

        $faculty->name = $request->name;

        $faculty->designation = $request->designation;

        $faculty->small_description = $request->small_description;
        $faculty->department_id = $request->department_id;

        $faculty->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $faculty->img = $request->file('img')->store('imgs', 'uploads');

            $faculty->save();
        }
        return redirect()->route('admin::faculties.index')->withStatus(__('Faculty successfully updated.'));
    }

    public function destroy(Faculty $faculty)
    {
        $img = url('upload/' . $faculty->img);


        try {
            if (is_file($img)) {
                unlink($img);
            }

        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $faculty->delete();

        return redirect()->route('admin::faculties.index')->withStatus(__('Faculty successfully deleted.'));
    }

     public function sortIndex()
    {
         return view('admin.faculties.sort',[
            'faculties'=>Faculty::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                Faculty::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
