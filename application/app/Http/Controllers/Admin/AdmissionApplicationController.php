<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdmissionApplication;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

/**
 * Admin list / view / delete for online admission applications.
 */
class AdmissionApplicationController extends Controller
{
    public function index()
    {
        return view('admin.admission_applications.index');
    }

    public function getData()
    {
        $model = AdmissionApplication::orderBy('created_at', 'desc');

        return DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('submitted_on', function (AdmissionApplication $row) {
                return $row->created_at
                    ? $row->created_at->format('d/m/Y h:i A')
                    : '-';
            })
            ->addColumn('actions', function (AdmissionApplication $row) {
                return view('admin.admission_applications.actions', ['row' => $row])->render();
            })
            ->rawColumns(['actions'])
            ->toJson();
    }

    public function show(AdmissionApplication $admission_application)
    {
        return view('admin.admission_applications.show', [
            'application' => $admission_application,
        ]);
    }

    public function destroy(AdmissionApplication $admission_application)
    {
        // Remove uploaded files from public/upload when present
        $fileFields = [
            'child_passport_doc',
            'child_residence_doc',
            'child_photo_doc',
            'father_doc',
            'mother_doc',
            'immunization_doc',
        ];

        foreach ($fileFields as $field) {
            if (!empty($admission_application->{$field})) {
                $path = public_path('upload/' . $admission_application->{$field});
                if (is_file($path)) {
                    @unlink($path);
                }
            }
        }

        $admission_application->delete();

        return redirect()
            ->route('admin::admission_applications.index')
            ->withStatus(__('Admission application successfully deleted.'));
    }
}
