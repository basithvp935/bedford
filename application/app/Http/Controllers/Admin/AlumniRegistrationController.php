<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Models\AlumniRegistration;
use App\Models\Contact;
use App\Models\Enquiry;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Exports\AlumniRegistrationExport;
use Excel;

class AlumniRegistrationController extends Controller
{
    public function __construct()
    {
        // $this->authorizeResource(Gallery::class);
    }

    public function index(AlumniRegistration $model)
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.alumni-registrations.index');
    }

    public function getDataRegistrations()
    {


        $model = Contact::get();

        return DataTables::of($model)
                         ->addIndexColumn()
                         ->addColumn(
                             'actions',
                             function (Contact $dpt) {
                                 return view('admin.alumni-registrations.actions', ['dpt' => $dpt])->render();
                             }
                         )
                         ->removeColumn('id', 'created_at', 'updated_at')
                         ->rawColumns(['actions'])
                         ->toJson();
    }

    public function getData()
    {

        $model = AlumniRegistration::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn(
                'actions',
                function (AlumniRegistration $dpt) {
                    return view('admin.alumni-registrations.actions', ['dpt' => $dpt])->render();
                }
            )
            ->removeColumn('id', 'created_at', 'updated_at')
            ->rawColumns(['actions'])
            ->toJson();
    }





    public function indexEnquiries()
    {
        // $this->authorize('manage-items', User::class);

        return view('admin.enquiries');
    }

    public function getDataEnquiries()
    {


        $model = Enquiry::get();

        return DataTables::of($model)
            ->addIndexColumn()
            ->removeColumn('id', 'created_at', 'updated_at')
            ->toJson();
    }



    public function downloadExcel(Request $request)
    {
            $datas = AlumniRegistration::orderby('created_at', 'desc')->get();

        return Excel::download(new AlumniRegistrationExport($datas), date('Y-m-d h-i-s') . ' Alumni-registrations.csv');
    }

    public function edit(AlumniRegistration $alumni_registration)
    {
        return view('admin.alumni-registrations.edit', compact('alumni_registration'));
    }

    public function update(Request $request, AlumniRegistration $alumni_registration)
    {


        $alumni_registration->name = $request->name;
        $alumni_registration->email = $request->email;
        $alumni_registration->whatsapp_number = $request->whatsapp_number;
        $alumni_registration->year_of_passing = $request->year_of_passing;
        $alumni_registration->employer = $request->employer;
        $alumni_registration->name_of_educational_institution = $request->name_of_educational_institution;
        if ($request->hasFile('photo')) {
            $alumni_registration->photo = $request->file('photo')->store('alumni', 'uploads');
        }


        $alumni_registration->save();
        return redirect()->route('admin::alumni-registrations.index')->withStatus(__('Alumni Registration successfully updated.'));
    }

    public function destroy(AlumniRegistration $alumni_registration)
    {

        $alumni_registration->delete();

        return redirect()->route('admin::alumni-registrations.index')->withStatus(__('Alumni Registration successfully deleted.'));
    }


}
