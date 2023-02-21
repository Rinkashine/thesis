<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerOrder;
use Carbon\Carbon;
class MostVisitedPage extends Component
{
    public $startdate = "2023-02-19";
    public $enddate ="2023-02-20";

    public function render()
    {
        $mostvisitedpage = Analytics::fetchMostVisitedPages(Period::days(7),20);

        $st = Carbon::createFromFormat('Y-m-d', $this->startdate);
        $ed = Carbon::createFromFormat('Y-m-d', $this->enddate);
        $period = Period::create($st,$ed);



        $mostvisitedpage = Analytics::fetchMostVisitedPages($period,20);
        return view('livewire.report.most-visited-page',[
            'mostvisitedpage' => $mostvisitedpage
        ]);
    }
}
