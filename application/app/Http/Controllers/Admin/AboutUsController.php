<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Academic;
use App\Models\HomePage;

class AboutUsController extends Controller
{

    public function edit()
    {
        $about_us = AboutUs::find(1);
        return view('admin.about_us.edit', compact('about_us'));
    }

    public function update(Request $request , AboutUs $about_us)
    {

        $this->validate($request, [
            'description' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',

         ]);


        $banner = url('upload/' . $about_us->banner);

        $about_us->description = $request->description;
        $about_us->save();


        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $about_us->banner = $request->file('banner')->store('about_us_banners', 'uploads');

            $about_us->save();
        }


        return redirect()->route('admin::about_us')->withStatus(__('About Us successfully updated.'));
    }


    public function editAcademics()
    {
        $academic = Academic::find(1);
        return view('admin.academics.edit', compact('academic'));
    }

    public function updateAcademics(Request $request , Academic $academic)
    {

        $this->validate($request, [
            'description' => 'required',
            'timing' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',

         ]);


        $banner = url('upload/' . $academic->banner);

        $academic->description = $request->description;
        $academic->timing = $request->timing;
        $academic->save();


        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $academic->banner = $request->file('banner')->store('academic_banners', 'uploads');

            $academic->save();
        }


        return redirect()->route('admin::academics')->withStatus(__('Academic successfully updated.'));
    }


    public function editFAQ()
    {
        $about_us = HomePage::find(1);
        return view('admin.about_us.faq', compact('about_us'));
    }

    public function updateFAQ(Request $request , HomePage $home)
    {

        $home = HomePage::find(1);
        $this->validate($request, [
            'faq' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',

         ]);


        $faqbanner = url('upload/' . $home->faqbanner);

        $home->faq = $request->faq;
        $home->save();


        if ($request->hasFile('faqbanner')) {
            if (is_file($faqbanner)) {
                unlink($faqbanner);
            }

            $home->faqbanner = $request->file('faqbanner')->store('faq_banners', 'uploads');

            $home->save();
        }


        return redirect()->route('admin::faq')->withStatus(__('FAQ successfully updated.'));
    }

}
