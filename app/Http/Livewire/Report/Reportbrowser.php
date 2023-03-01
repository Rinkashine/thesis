<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Reportbrowser extends Component
{
    public $startdate = "2023-02-19";
    public $enddate ="2023-02-20";
    public $browsers;
    public $browserchartlabel = [];
    public $browserchartdataset = [];
    public function render()
    {
        $this->browserchartdataset = [];
        $this->browserchartlabel = [];

        if($this->enddate < $this->startdate){
            $this->startdate = $this->enddate;
        }else{
            $st = Carbon::createFromFormat('Y-m-d', $this->startdate);
            $ed = Carbon::createFromFormat('Y-m-d', $this->enddate);
            $period = Period::create($st,$ed);


            $this->browsers = Analytics::fetchTopBrowsers($period,20);
            foreach($this->browsers as $browser){
                array_push($this->browserchartlabel, $browser['browser']);
                array_push($this->browserchartdataset, $browser['sessions']);
            }

            $this->dispatchBrowserEvent('render-chart', [
                "label" => $this->browserchartlabel,
                "dataset" => $this->browserchartdataset,
            ]);
        }



        return view('livewire.report.reportbrowser',[
            'browsers' => $this->browsers,
            'browserchartlabel' => $this->browserchartlabel,
            'browserchartdataset' => $this->browserchartdataset
        ]);
    }
}
