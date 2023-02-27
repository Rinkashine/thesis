<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Analytics;
use Spatie\Analytics\Period;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Carbon\Carbon;
class MostVisitedPageExport implements FromCollection,WithHeadings,ShouldAutoSize,WithMapping
{
    protected $startdate,$enddate;

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

        return Analytics::fetchMostVisitedPages($period,10);

    }

    public function map($page): array
    {
        return [
            env("APP_URL").$page['url'],
            $page['pageTitle'],
            $page['pageViews'],
        ];
    }


    public function headings(): array
    {
        return [
            'URL',
            'Page Title',
            'Views',
        ];
    }
}
