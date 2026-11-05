<?php
namespace App\Exports;

use App\Models\CareerApplication;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class CareerApplicationsExport implements FromQuery, WithHeadings, ShouldAutoSize, WithMapping
{
    protected $careerSlug;
    protected $archived;

    public function __construct($careerSlug = null, $archived = 0)
    {
        $this->careerSlug = $careerSlug;
        $this->archived = $archived;
    }

    public function query()
    {
        $query = CareerApplication::query();

        $query->where('is_archived', $this->archived);
        if ($this->careerSlug) {
            $query->whereHas('getCareer', function($q) {
                $q->where('title', $this->careerSlug);
            });
        }

        return $query;
    }

    public function headings(): array
    {
        return [
            'NO',
            'Career',
            'Name',
            'Email',
            'Phone',
            'Remark',
            'Notice Period',
            'Cur CTC',
            'Exp CTC',
            'CV',
            'Date'
        ];
    }

    public function map($row): array
    {
        static $count = 1;
        return [
            $count++,
            $row->getCareer ? $row->getCareer->title : 'N/A', // Fetch the career title correctly
            $row->name,
            $row->email,
            $row->phone,
            $row->remark,
            $row->notice_period,
            $row->cur_ctc,
            $row->exp_ctc,
            url('uploads/cv/' .  $row->cv),
            $row->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
