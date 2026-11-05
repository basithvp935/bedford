<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\clientRequest;
use App\Models\TransferCertificate;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;

class TransferCertificateController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(client::class);
    }

    public function index(TransferCertificate $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.transfer-certificates.index');
    }

    public function getData()
    {

        $model = TransferCertificate::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('pdf', function (TransferCertificate $dpt) {
                return "<a href=" . url('upload/' . $dpt->pdf) . " target='_blank'>View</a>";
            })
            ->addColumn('actions', function (TransferCertificate $dpt) {
                return view('admin.transfer-certificates.actions', ['dpt' => $dpt])->render();
            })
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions', 'pdf'])

            ->toJson();
    }

    public function create()
    {
        return view('admin.transfer-certificates.create');
    }

    public function store(Request $request, TransferCertificate $model)
    {

        $this->validate($request, [
            'pdf' => 'required|mimes:pdf',
            'gr_number' => 'required',
            'dob' => 'required|date',
        ]);

        TransferCertificate::create([
            'pdf' => ($request->file('pdf')) ? $request->file('pdf')->store('TransferCertificatepdf', 'uploads') : NULL,
            'gr_number' => $request->gr_number,
            'dob' => Carbon::parse($request->dob)->format('Y-m-d')
        ]);


        return redirect()->route('admin::transfer-certificates.index')->withStatus(__('Transfer Certificate successfully created.'));
    }

    public function edit(TransferCertificate $transfer_certificate)
    {
        return view('admin.transfer-certificates.edit', compact('transfer_certificate'));
    }

    public function update(Request $request, TransferCertificate $transfer_certificate)
    {
        $image = base_path('upload/' . $transfer_certificate->pdf);


        $this->validate($request, [
            'pdf' => 'mimes:pdf',
            'gr_number' => 'required',
            'dob' => 'required|date',
        ]);

        if ($request->hasFile('pdf')) {
            if (is_file($image)) {
                unlink($image);
            }

            $transfer_certificate->pdf = $request->file('pdf')->store('TransferCertificatepdf', 'uploads');
            $transfer_certificate->save();
        }

        $transfer_certificate->gr_number = $request->gr_number;
        $transfer_certificate->dob = Carbon::parse($request->dob)->format('Y-m-d');
        $transfer_certificate->save();

        return redirect()->route('admin::transfer-certificates.index')->withStatus(__('Transfer Certificate successfully updated.'));
    }

    public function destroy(TransferCertificate $transfer_certificate)
    {
        $image = base_path('upload/' . $transfer_certificate->pdf);


        try {
            if (is_file($image)) {
                unlink($image);
            }
        } catch (\Exception $e) {
            dd($e);
            $notification = array('message' => 'Something went wrong!', 'alert-type' => 'warning');
            return redirect()->back()->with($notification);
        }
        $transfer_certificate->delete();


        return redirect()->route('admin::transfer-certificates.index')->withStatus(__('Transfer Certificate successfully deleted.'));
    }
}
