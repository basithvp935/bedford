<?php
echo 'hi';exit;
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Principal;


class PrincipalController extends Controller
{

    public function edit()
    {
        $principal = Principal::find(1);
        return view('admin.principal.edit', compact('principal'));
    }

    public function update(Request $request , Principal $principal)
    {

        $this->validate($request, [
            'content' => 'required',
            'banner' => 'image|mimes:jpeg,png,jpg',
            'small_banner' => 'image|mimes:jpeg,png,jpg',
         ]);

        $banner = url('upload/' . $principal->banner);
        $small_banner = url('upload/' . $principal->small_banner);

        $principal->content = $request->content;
        $principal->save();

        if ($request->hasFile('banner')) {
            if (is_file($banner)) {
                unlink($banner);
            }

            $principal->banner = $request->file('banner')->store('principal', 'uploads');

            $principal->save();
        }

    if ($request->hasFile('small_banner')) {
            if (is_file($small_banner)) {
                unlink($small_banner);
            }

            $principal->small_banner = $request->file('small_banner')->store('principal', 'uploads');

            $principal->save();
        }

        return redirect()->route('admin::principal')->withStatus(__('Principal successfully updated.'));
    }

}
