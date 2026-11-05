<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aim;


class AimsController extends Controller
{

    public function edit()
    {
        $aim = Aim::find(1);
        return view('admin.aims.edit', compact('aim'));
    }

    public function update(Request $request , Aim $aim)
    {

        $this->validate($request, [
            'content' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',
            'small_banner' => 'image|mimes:jpeg,png,jpg',
         ]);

        $banner = url('upload/' . $aim->banner);
        $small_banner = url('upload/' . $aim->small_banner);

        $aim->content = $request->content;
        $aim->save();

        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $aim->banner = $request->file('banner')->store('aims', 'uploads');

            $aim->save();
        }
        
        if ($request->hasFile('small_banner')) {
            if (is_file($small_banner)) {
                unlink($small_banner);
            }

            $aim->small_banner = $request->file('small_banner')->store('aims', 'uploads');

            $aim->save();
        }


        return redirect()->route('admin::aims')->withStatus(__('Aim successfully updated.'));
    }

}
