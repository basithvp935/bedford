<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\President;


class PresidentController extends Controller
{

    public function edit()
    {

        switch (last(request()->segments())) {
            case "founder":
                $id = 2;
                break;
            case "principal":
                $id = 3;
                break;
            case "vice-principal":
                $id = 4;
                break;
            default:
                $id = 1;
        }
        $user_type = last(request()->segments());
        $president = President::find($id);

        return view('admin.president.edit', compact('president', 'user_type'));
    }

    public function update(Request $request , President $president)
    {

        $this->validate($request, [
            'content' => 'required',
            'name' => 'required',
            'img' => 'image|mimes:jpeg,png,jpg',
         ]);

        $banner = url('upload/' . $president->img);

        $president->content = $request->content;
        $president->name = $request->name;
        $president->save();

        if ($request->hasFile('img')) {
            if (is_file($banner)) {
                unlink($banner);
            }
            $president->img = $request->file('img')->store('president', 'uploads');
            $president->save();
        }
        $small_banner = url('upload/' . $president->small_banner);
        if ($request->hasFile('small_banner')) {
            if (is_file($small_banner)) {
                unlink($small_banner);
            }
            $president->small_banner = $request->file('small_banner')->store('president', 'uploads');
            $president->save();
        }

        return redirect()->back()->withStatus(__('Updated successfully '));
    }

}
