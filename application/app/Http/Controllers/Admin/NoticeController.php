<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Carbon\Carbon;


class NoticeController extends Controller
{
    public function index()
    {

        $notices = Notice::all();
        return view('admin.notices.index', compact('notices'));
    }


    public function create()
    {
        return view('admin.notices.create');
    }

    public function store(Request $request)
    {

           $request->validate([
            'title' => 'max:255',
            'date' => 'required|date_format:m/d/Y',
            'description' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',
        ]);

        $formattedDate = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');

        Notice::create([
            'title' => $request->title,
            'date' =>  $formattedDate,
            'description' => $request->description,
            'status' => $request->status,
        ]);


        return redirect()->route('admin::notice.index')->with('success', 'Notice created successfully.');
    }

    public function edit($id)
    {
        $notice = Notice::findOrFail($id);

        return view('admin.notices.edit', compact('notice'));
    }

    public function update(Request $request, Notice $notice)
    {

        $request->validate([
            'title' => 'max:255',
            'date' => 'required|date_format:m/d/Y',
            'description' => 'nullable|string',
            'status' => 'required|string|in:active,inactive',
        ]);

        $formattedDate = Carbon::createFromFormat('m/d/Y', $request->date)->format('Y-m-d');

        $notice->title = $request->input('title');
        $notice->date = $formattedDate;
        $notice->description = $request->input('description');
        $notice->status = $request->input('status');

        $notice->save();


        return redirect()->route('admin::notice.index')->with('success', 'Notice updated successfully.');
    }

    public function destroy(Notice $notice)
    {
        $notice->delete();

        return redirect()->route('admin::notice.index')->with('success', 'Notice deleted successfully.');
    }

}

