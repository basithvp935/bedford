<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Calendar;


class CalendarController extends Controller
{

    public function edit()
    {
        $calendar = Calendar::find(1);
        return view('admin.calendar.edit', compact('calendar'));
    }

    public function update(Request $request , Calendar $calendar)
    {

        $this->validate($request, [
            'pdf' => 'mimes:pdf',

         ]);


        $pdf = url('upload/' . $calendar->pdf);

        if ($request->hasFile('pdf')) {
            if (is_file($pdf)) {
                unlink($pdf);
            }

            $calendar->pdf = $request->file('pdf')->store('pdf', 'uploads');
            $calendar->save();
        }


        return redirect()->route('admin::calendar')->withStatus(__('Calendar successfully updated.'));
    }

}
