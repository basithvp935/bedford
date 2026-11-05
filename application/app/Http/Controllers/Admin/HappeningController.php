<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Happening;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class HappeningController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(Happening::class);

    }

    public function index(Happening $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.happenings.index');
    }

    public function getData()
    {
        $model = Happening::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'img',
                function (Happening $dpt) {
                    return "<img src=" . url('upload/' . $dpt->img) . "  height='80' width='80'>";
                }
            )
            ->addColumn(
                'actions',
                function (Happening $dpt) {
                    return view('admin.happenings.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'img'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.happenings.create');
    }

    public function store(Request $request, Happening $model)
    {

        $this->validate($request, [
            'title' => 'required|unique:happenings',
            'img' => 'required|image|mimes:jpeg,png,jpg',
            'date' => 'required|date',
        ]);


        Happening::create(
            [

                'title' => $request->title,
                'img' => $request->file('img')->store('imgs', 'uploads'),
                'date'=>Carbon::parse($request->date)->format('Y-m-d'),
                // 'meta_title' => $request->meta_title,
                // 'meta_description' => $request->meta_description,
                // 'meta_keyword' => $request->meta_keyword

            ]
        );

        return redirect()->route('admin::happenings.index')->withStatus(__('Happening successfully created.'));
    }

    public function edit(Happening $happening)
    {
        return view('admin.happenings.edit', compact('happening'));
    }

    public function update(Request $request, Happening $happening)
    {

        $this->validate($request, [
            'title' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg',
            'date' => 'required|date',
         ]);

        $img = url('upload/' . $happening->img);

        $happening->title = $request->title;

        $happening->date = Carbon::parse($request->date)->format('Y-m-d');

        // $happening->meta_title = $request->meta_title;

        // $happening->meta_description = $request->meta_description;

        // $happening->meta_keyword = $request->meta_keyword;

        $happening->save();

        if ($request->hasFile('img')) {
            if (is_file($img)) {
                unlink($img);
            }

            $happening->img = $request->file('img')->store('imgs', 'uploads');

            $happening->save();
        }

        return redirect()->route('admin::happenings.index')->withStatus(__('Happening successfully updated.'));
    }

    public function destroy(Happening $happening)
    {
        $img = url('upload/' . $happening->img);



        try {
            if (is_file($img)) {
                unlink($img);
            }


            if (is_file($banner)) {
                unlink($banner);
            }
        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $happening->delete();

        return redirect()->route('admin::happenings.index')->withStatus(__('Happening successfully deleted.'));
    }

    public function sortIndex()
    {
         return view('admin.happenings.sort',[
            'happenings'=>Happening::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                Happening::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
