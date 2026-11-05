<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;

use App\Models\Fact;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class FactController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(news::class);

    }

    public function index(Fact $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.facts.index');
    }

    public function getData()
    {
        $model = Fact::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'img',
                function (Fact $dpt) {
                    return "<img src=" . url('upload/' . $dpt->img) . "  height='80' width='80'>";
                }
            )
            ->addColumn(
                'actions',
                function (Fact $dpt) {
                    return view('admin.facts.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'img'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.facts.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:facts',
            'point' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg',
        ]);


        Fact::create(
            [

                'name' => $request->name,
                'point' => $request->point,
                'img' => $request->file('img')->store('imgs', 'uploads')

            ]
        );

        return redirect()->route('admin::facts.index')->withStatus(__('Fact successfully created.'));
    }

    public function edit(Fact $fact)
    {
        return view('admin.facts.edit', compact('fact'));
    }

    public function update(Request $request, Fact $fact)
    {

        $this->validate($request, [
            'name' => 'required|unique:facts,name,' . $fact->id . ',id',
            'point' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg'
         ]);

        $img = url('upload/' . $fact->img);

        $fact->name = $request->name;

        $fact->point = $request->point;

        $fact->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $fact->img = $request->file('img')->store('imgs', 'uploads');

            $fact->save();
        }
        return redirect()->route('admin::facts.index')->withStatus(__('Fact successfully updated.'));
    }

    public function destroy(Fact $fact)
    {
        $img = url('upload/' . $fact->img);


        try {
            if (is_file($img)) {
                unlink($img);
            }

        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $fact->delete();

        return redirect()->route('admin::facts.index')->withStatus(__('Fact successfully deleted.'));
    }

     public function sortIndex()
    {
         return view('admin.facts.sort',[
            'facts'=>Fact::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                Fact::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
