<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Analytics;
use Spatie\Analytics\Period;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class UserTypeExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Analytics::fetchUserTypes(Period::days(7));
    }
    public function headings(): array
    {
        return [
            'User Type',
            'Sessions'
        ];
    }
}
