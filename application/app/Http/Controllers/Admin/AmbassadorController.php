<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;

use App\Models\Ambassador;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class AmbassadorController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(news::class);

    }

    public function index(Ambassador $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.ambassadors.index');
    }

    public function getData()
    {
        $model = Ambassador::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'img',
                function (Ambassador $dpt) {
                    return "<img src=" . url('upload/' . $dpt->img) . "  height='80' width='80'>";
                }
            )->addColumn(
                'video',
                function (Ambassador $dpt) {
                    if($dpt->iframe){
                        return "<iframe src='https://www.youtube.com/embed/" . $dpt->iframe . "' class='m-0 p-0' width='100%' height='267'  title=' '  allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>";
                    }
                    return "";


                }
            )
            ->addColumn(
                'actions',
                function (Ambassador $dpt) {
                    return view('admin.ambassadors.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'img','video'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.ambassadors.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:ambassadors',
            'small_description' => 'required',
        ]);


        $Ambassador =  Ambassador::create(
            [

                'name' => $request->name,
                'small_description' => $request->small_description,
                'iframe' => $request->iframe,

            ]
        );

        if ($request->hasFile('img')) {
            $Ambassador->img = $request->file('img')->store('imgs', 'uploads');
            $Ambassador->save();
        }

        return redirect()->route('admin::ambassadors.index')->withStatus(__('Ambassador successfully created.'));
    }

    public function edit(Ambassador $ambassador)
    {
        return view('admin.ambassadors.edit', compact('ambassador'));
    }

    public function update(Request $request, Ambassador $ambassador)
    {

        $this->validate($request, [
            'name' => 'required|unique:ambassadors,name,' . $ambassador->id . ',id',
            'small_description' => 'required',
         ]);

        $img = url('upload/' . $ambassador->img);

        $ambassador->name = $request->name;

        $ambassador->small_description = $request->small_description;
        $ambassador->iframe = $request->iframe;

        $ambassador->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $ambassador->img = $request->file('img')->store('imgs', 'uploads');

            $ambassador->save();
        }
        return redirect()->route('admin::ambassadors.index')->withStatus(__('Ambassador successfully updated.'));
    }

    public function destroy(Ambassador $ambassador)
    {
        $img = url('upload/' . $ambassador->img);


        try {
            if (is_file($img)) {
                unlink($img);
            }

        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $ambassador->delete();

        return redirect()->route('admin::ambassadors.index')->withStatus(__('Ambassador successfully deleted.'));
    }

     public function sortIndex()
    {
         return view('admin.ambassadors.sort',[
            'ambassadors'=>Ambassador::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                Ambassador::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
