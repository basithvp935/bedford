<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AlumniRegistrationExport implements FromView
{
    private $datas;

    public function __construct($datas)
    {
        $this->datas = $datas;
    }

    public function view(): View
    {
        return view('admin.alumni-registrations.export_to_excel', [
            'datas' => $this->datas
        ]);
    }
}