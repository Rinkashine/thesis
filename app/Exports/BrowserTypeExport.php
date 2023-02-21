<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Analytics;
use Spatie\Analytics\Period;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class BrowserTypeExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Analytics::fetchTopBrowsers(Period::days(7),20);
    }
    public function headings(): array
    {
        return [
            'Browser Name',
            'Sessions'
        ];
    }

}
