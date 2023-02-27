<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Analytics;
use Spatie\Analytics\Period;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Carbon\Carbon;

class BrowserTypeExport implements FromCollection,WithHeadings,ShouldAutoSize
{
    protected $startdate, $enddate;
    function __construct($startdate,$enddate){
        $this->startdate = $startdate;
        $this->enddate = $enddate;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $st = Carbon::createFromFormat('Y-m-d', $this->startdate);
        $ed = Carbon::createFromFormat('Y-m-d', $this->enddate);
        $period = Period::create($st,$ed);

        return Analytics::fetchTopBrowsers($period,20);
    }
    public function headings(): array
    {
        return [
            'Browser Name',
            'Sessions'
        ];
    }

}
