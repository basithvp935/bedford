<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;

use App\Models\ManagementCommitty;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class ManagementCommitteesController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(news::class);

    }

    public function index(ManagementCommitty $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.management_committees.index');
    }

    public function getData()
    {
        $model = ManagementCommitty::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'img',
                function (ManagementCommitty $dpt) {
                    return "<img src=" . url('upload/' . $dpt->img) . "  height='80' width='80'>";
                }
            )
            ->addColumn(
                'actions',
                function (ManagementCommitty $dpt) {
                    return view('admin.management_committees.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'img'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.management_committees.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:management_committees',
            'designation' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        ManagementCommitty::create(
            [

                'name' => $request->name,
                'designation' => $request->designation,
                'small_description' => $request->small_description,
                'img' => $request->file('img')->store('imgs', 'uploads')

            ]
        );

        return redirect()->route('admin::management-committees.index')->withStatus(__('Management Committy successfully created.'));
    }

    public function edit(ManagementCommitty $management_committe)
    {
        return view('admin.management_committees.edit', compact('management_committe'));
    }

    public function update(Request $request, ManagementCommitty $management_committe)
    {

        $this->validate($request, [
            'name' => 'required|unique:management_committees,name,' . $management_committe->id . ',id',
            'designation' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg'
         ]);

        $img = url('upload/' . $management_committe->img);

        $management_committe->name = $request->name;

        $management_committe->designation = $request->designation;

        $management_committe->small_description = $request->small_description;

        $management_committe->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $management_committe->img = $request->file('img')->store('imgs', 'uploads');

            $management_committe->save();
        }
        return redirect()->route('admin::management-committees.index')->withStatus(__('Management Committy successfully updated.'));
    }

    public function destroy(ManagementCommitty $management_committe)
    {
        $img = url('upload/' . $management_committe->img);


        try {
            if (is_file($img)) {
                unlink($img);
            }

        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $management_committe->delete();

        return redirect()->route('admin::management-committees.index')->withStatus(__('Management Committy successfully deleted.'));
    }

     public function sortIndex()
    {
         return view('admin.management_committees.sort',[
            'management_committees'=>ManagementCommitty::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                ManagementCommitty::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
