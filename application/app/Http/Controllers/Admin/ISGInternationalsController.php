<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IsgInternational;


class ISGInternationalsController extends Controller
{

    public function edit()
    {
        $isg_international = IsgInternational::find(1);
        return view('admin.isg_international.edit', compact('isg_international'));
    }

    public function update(Request $request , IsgInternational $isg_international)
    {

        $this->validate($request, [
            'first_video' => 'required',
            'first_title' => 'required',
            'second_title' => 'required',
            'third_video' => 'required',
            'third_title' => 'required',
            'first_img' => 'image|mimes:jpeg,png,jpg',
            'second_img' => 'image|mimes:jpeg,png,jpg',
            'third_img' => 'image|mimes:jpeg,png,jpg',
            'third_description'=>'required',
         ]);

        $first_img = url('upload/' . $isg_international->first_img);
        $second_img = url('upload/' . $isg_international->second_img);
        $third_img = url('upload/' . $isg_international->third_img);

        $isg_international->first_video = $request->first_video;
        $isg_international->first_title = $request->first_title;
        $isg_international->second_title = $request->second_title;
        $isg_international->third_video = $request->third_video;
        $isg_international->third_title = $request->third_title;
        $isg_international->third_description = $request->third_description;
        $isg_international->save();

        if ($request->hasFile('first_img')) {
            if (is_file($first_img)) {
                unlink($first_img);
            }

            $isg_international->first_img = $request->file('first_img')->store('isg_international', 'uploads');
            $isg_international->save();
        }

        if ($request->hasFile('second_img')) {
            if (is_file($second_img)) {
                unlink($second_img);
            }

            $isg_international->second_img = $request->file('second_img')->store('isg_international', 'uploads');
            $isg_international->save();
        }

        if ($request->hasFile('third_img')) {
            if (is_file($third_img)) {
                unlink($third_img);
            }

            $isg_international->third_img = $request->file('third_img')->store('isg_international', 'uploads');
            $isg_international->save();
        }

        return redirect()->route('admin::isg_internationals')->withStatus(__('Isg International successfully updated.'));
    }

}
