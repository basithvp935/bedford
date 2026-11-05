<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admission;


class AdmissionController extends Controller
{

    public function edit()
    {
        $admission = Admission::find(1);
        return view('admin.admission.edit', compact('admission'));
    }

    public function update(Request $request , Admission $admission)
    {

        $this->validate($request, [
            'content' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',
         ]);

        $banner = url('upload/' . $admission->banner);
        $image = base_path('upload/' . $admission->pdf);

        $admission->content = $request->content;
        $admission->save();

        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $admission->banner = $request->file('banner')->store('admission', 'uploads');

            $admission->save();
        }


        if ($request->hasFile('pdf')) {
            if (is_file($image)) {
                unlink($image);
            }

            $admission->pdf = $request->file('pdf')->store('Circularpdf', 'uploads');
            $admission->save();
        }


        return redirect()->route('admin::admission')->withStatus(__('Admission successfully updated.'));
    }

}
