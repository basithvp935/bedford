<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\NewsRequest;

use App\Models\News;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use Carbon\Carbon;

class NewsController extends Controller
{
    public function __construct()
    {

        // $this->authorizeResource(news::class);

    }

    public function index(News $model)
    {

        // $this->authorize('manage-items', User::class);

        return view('admin.news.index');
    }

    public function getData()
    {
        $model = News::orderby('news_date', 'desc')->get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'thumb_img',
                function (News $dpt) {
                    return "<img src=" . url('upload/' . $dpt->thumb_img) . "  height='80' width='80'>";
                }
            )
            ->addColumn(
                'actions',
                function (News $dpt) {
                    return view('admin.news.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'thumb_img'])
            ->toJson();
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request, News $model)
    {

        $this->validate($request, [
            'news_title' => 'required|unique:newses',
            'news_content' => 'required',
            'thumb_img' => 'required|image|mimes:jpeg,png,jpg',
            'banner' => 'required|image|mimes:jpeg,png,jpg',
            'news_date' => 'required|date',
            'flash' => 'nullable|in:1,0'
        ]);


        News::create(
            [

                'news_title' => $request->news_title,
                'news_date'=>Carbon::parse($request->news_date)->format('Y-m-d'),
                'news_slug' => Str::slug($request->news_title),
                'news_content' => $request->news_content,
                'thumb_img' => $request->file('thumb_img')->store('imgs', 'uploads'),
                'banner' => $request->file('banner')->store('banner', 'uploads'),
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description,
                'meta_keyword' => $request->meta_keyword,
                'flash' => $request->flash ?? 0,

            ]
        );

        return redirect()->route('admin::news.index')->withStatus(__('News successfully created.'));
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {

        $this->validate($request, [
            'news_title' => 'required',
            'news_content' => 'required',
            'thumb_img' => 'image|mimes:jpeg,png,jpg',
            'banner' => 'image|mimes:jpeg,png,jpg',
            'news_date' => 'required|date',
            'flash' => 'nullable|in:1,0'
         ]);

        $thumb_img = url('upload/' . $news->thumb_img);
        $banner = url('upload/' . $news->banner);

        $news->news_title = $request->news_title;

        $news->news_date = Carbon::parse($request->news_date)->format('Y-m-d');

        $news->news_slug = Str::slug($request->news_title);

        $news->news_content = $request->news_content;

        $news->meta_title = $request->meta_title;

        $news->meta_description = $request->meta_description;

        $news->meta_keyword = $request->meta_keyword;
         $news->flash = $request->flash ?? 0;

        $news->save();

        if ($request->hasFile('thumb_img')) {
            if (is_file($thumb_img)) {
                unlink($thumb_img);
            }

            $news->thumb_img = $request->file('thumb_img')->store('imgs', 'uploads');

            $news->save();
        }


        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $news->banner = $request->file('banner')->store('news_banners', 'uploads');

            $news->save();
        }
        return redirect()->route('admin::news.index')->withStatus(__('news successfully updated.'));
    }

    public function destroy(News $news)
    {

        $banner = url('upload/' . $news->banner);

        $thumb_img = url('upload/' . $news->thumb_img);

        try {

            if (is_file($thumb_img)) {
                unlink($thumb_img);
            }

            if (is_file($banner)) {
                unlink($banner);
            }
        } catch (\Exception $e) {
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');

            // return redirect()->back()->with($notification);

        }

        $news->delete();

        return redirect()->route('admin::news.index')->withStatus(__('News successfully deleted.'));
    }

    public function setFlashNews(Request $request)
    {
         return News::where('id',$request->id)
                     ->update([
                         'flash'=>$request->value
                     ]);
    }

     public function sortIndex()
    {
         return view('admin.news.sort',[
            'newses'=>News::orderBy('orders', 'asc')->get()
        ]);
    }

    public function sortData(Request $request)
    {

        $post_order = [];
        $post_order = explode (",", $request->post_order_ids);

        if(count($post_order)>0){
            for($order_no= 0; $order_no < count($post_order); $order_no++)
            {
                News::where('id',$post_order[$order_no])->update(['orders'=>$order_no+1]);
            }
            echo true;
        }else{
            echo false;
        }

    }
}
