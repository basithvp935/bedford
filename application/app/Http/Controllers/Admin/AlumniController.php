<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Alumni;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class AlumniController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Gallery::class);
    }

    public function index(Alumni $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.alumnies.index');
    }

    public function getData()
    {

        $model = Alumni::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('image', function (Alumni $dpt) {
                return "<img src=" . url('upload/' . $dpt->image) . "  height='80' width='80'>";

            })
            ->addColumn('actions', function (Alumni $dpt) {
                return view('admin.alumnies.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'image'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.alumnies.create');
    }

    public function store(Request $request, Alumni $model)
    {

            $this->validate($request, [
                'name' =>  'required',
                'sub_description' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg',
            ]);

      Alumni::create([
                    'image' => ($request->file('image'))?$request->file('image')->store('Alumni_image', 'uploads'):NULL,
                    'sub_description' => $request->sub_description,
                    'name'=>$request->name
                ]);



        return redirect()->route('admin::alumnies.index')->withStatus(__('Alumni successfully created.'));
    }

    public function edit(Alumni $alumni)
    {
        return view('admin.alumnies.edit', compact('alumni'));
    }

    public function update(Request $request, Alumni $alumni)
    {
        $image = base_path('upload/' . $alumni->image);

            $this->validate($request, [
                'sub_description' => 'required',
                'image' => 'image|mimes:jpeg,png,jpg',
                'name' =>  'required',
            ]);


        $alumni->sub_description = $request->sub_description;
        $alumni->name = $request->name;
        $alumni->save();

        if ($request->hasFile('image')) {
            if (is_file($image)) {
                unlink($image);
            }

            $alumni->image = $request->file('image')->store('Alumni_image', 'uploads');
            $alumni->save();
        }



        return redirect()->route('admin::alumnies.index')->withStatus(__('Alumni successfully updated.'));
    }

    public function destroy(Alumni $alumni)
    {

        $image = base_path('upload/' . $alumni->image);
        try
        {
            if ($image) {
                unlink($image);
            }
        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-sub_description' => 'warning');
             return redirect()->back()->with($notification);
        }

        $alumni->delete();

        return redirect()->route('admin::alumnies.index')->withStatus(__('Alumni successfully deleted.'));
    }
    
    public function sortIndex()
    {
         return view('admin.alumnies.sort',[
            'alumnies'=>Alumni::orderBy('orders', 'asc')->get()
        ]);
    }
    
    public function sortData(Request $request)
    {
       
        $post_order = [];
        $post_order = explode (",", $request->post_order_ids); 
        
        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                Alumni::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true; 
        }else{
            echo false; 
        }
         
    }
}
