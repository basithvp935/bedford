<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;


class HomePageController extends Controller
{

    public function edit()
    {
        $home_page = HomePage::find(1);
        return view('admin.home_page.edit', compact('home_page'));
    }

    public function update(Request $request , HomePage $home_page)
    {

        $this->validate($request, [
            'about_description' => 'required',
            'about_img' => 'image|mimes:jpeg,png,jpg',
            'main_head'=>'required',
            'isg_gallery_text'=>'required',

         ]);


        $about_img = url('upload/' . $home_page->about_img);
        $acaddemic_calendar_pdf = url('upload/' . $home_page->acaddemic_calendar_pdf);

        $home_page->about_description = $request->about_description;
        $home_page->main_head = $request->main_head;
        $home_page->isg_gallery_text=$request->isg_gallery_text;
        $home_page->save();


        if ($request->hasFile('about_img')) {
            if (is_file($about_img)) {
                unlink($about_img);
            }

            $home_page->about_img = $request->file('about_img')->store('HomePage_about_imgs', 'uploads');

            $home_page->save();
        }

        if ($request->hasFile('acaddemic_calendar_pdf')) {
            if (is_file($acaddemic_calendar_pdf)) {
                unlink($acaddemic_calendar_pdf);
            }

            $home_page->acaddemic_calendar_pdf = $request->file('acaddemic_calendar_pdf')->store('acaddemic_calendar_pdf', 'uploads');

            $home_page->save();
        }



        return redirect()->route('admin::home_page')->withStatus(__('Home Page successfully updated.'));
    }

}
