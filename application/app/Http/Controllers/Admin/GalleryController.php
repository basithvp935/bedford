<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use App\Models\GalleryDetail;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class GalleryController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Gallery::class);
    }

    public function index(Gallery $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.gallery.index');
    }

    public function getData()
    {

        $model = Gallery::orderby('id', 'desc')->get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('image', function (Gallery $dpt) {
                return view('admin.gallery.type', ['dpt' => $dpt])->render();

            })
            ->addColumn('actions', function (Gallery $dpt) {
                return view('admin.gallery.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'image'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request, Gallery $model)
    {

            $this->validate($request, [
                'title' =>  'required',
                'image' => 'required|image|mimes:jpeg,png,jpg',
                "sub_images"    => "required|array|min:1",
                "sub_images.*"  => "required|min:3",
            ]);

        $gallery = Gallery::create([
                    'image' => ($request->file('image'))?$request->file('image')->store('Gallery_image', 'uploads'):NULL,
                     'title'=>$request->title
                ]);

                if(!empty($request->sub_images)){
                    foreach ($request->sub_images as $index => $sub_image) {

                        GalleryDetail::create([

                            'gallery_id' => $gallery->id,

                            'img' => $sub_image->store('gallery_sub_images', 'uploads')

                        ]);
                    }
                }


        return redirect()->route('admin::gallerys.index')->withStatus(__('Gallery successfully created.'));
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $image = base_path('upload/' . $gallery->image);


            $this->validate($request, [
                'title' =>  'required',
            ]);


        $gallery->title = $request->title;

        if ($request->hasFile('image')) {
            if (is_file($image)) {
                unlink($image);
            }

            $gallery->image = $request->file('image')->store('Gallery_image', 'uploads');
            
        }

            $gallery->save();
        if (!empty($request->sub_images)) {
            
            foreach ($request->sub_images as $index => $sub_image) {

                GalleryDetail::create([

                    'gallery_id' => $gallery->id,

                    'img' => $sub_image->store('gallery_sub_images', 'uploads')

                ]);
            }
        }



        return redirect()->route('admin::gallerys.index')->withStatus(__('Gallery successfully updated.'));
    }

    public function destroy(Gallery $gallery)
    {

        $image = base_path('upload/' . $gallery->image);

        try
        {
           if (is_file($image)) {
                unlink($image);
            }
            $gallery->delete();
        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
             return redirect()->back()->with($notification);
        }



        return redirect()->route('admin::gallerys.index')->withStatus(__('Gallery successfully deleted.'));
    }

    public function galleryImages(Gallery $gallery)
    {
        return view('admin.gallery.gallery_images', [
            'gallery' => $gallery
        ]);
    }

    public function getSubImageDelete(GalleryDetail $gallery_detail)
    {
        $stre_img = base_path('upload/'  . $gallery_detail->img);

        if (is_file($stre_img)) {
            unlink($stre_img);
        }
        $gallery_detail->delete();
        $notification = array('message' => 'Image successfully deleted.', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }

    public function sortIndex()
    {
         return view('admin.gallery.sort',[
            'gallerys'=>Gallery::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortVideosIndex()
    {
         return view('admin.gallery.sort_videos',[
            'gallerys'=>Gallery::orderBy('orders', 'asc')->where('type','Video')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                Gallery::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
