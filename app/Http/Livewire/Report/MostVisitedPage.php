<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MostVisitedPage extends Component
{
    public $startdate = "2023-02-19";
    public $enddate ="2023-02-20";
    public $mostvisitedpage ;
    public $mostvisitedlabel = [];
    public $mostvisiteddataset = [];

    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        $this->mostvisitedlabel = [];
        $this->mostvisiteddataset = [];

        if($this->enddate < $this->startdate){
            $this->startdate = $this->enddate;
        }else{
            $st = Carbon::createFromFormat('Y-m-d', $this->startdate);
            $ed = Carbon::createFromFormat('Y-m-d', $this->enddate);
            $period = Period::create($st,$ed);

            $this->mostvisitedpage = Analytics::fetchMostVisitedPages($period,10);

            foreach($this->mostvisitedpage as $page){
                array_push($this->mostvisitedlabel, $page['pageTitle']);
                array_push($this->mostvisiteddataset,$page['pageViews']);
            }

            $this->dispatchBrowserEvent('render-chart', [
                "label" => $this->mostvisitedlabel,
                "dataset" => $this->mostvisiteddataset,
            ]);
        }

        return view('livewire.report.most-visited-page',[
            'mostvisitedpage' => $this->mostvisitedpage,
            'mostvisitedlabel' => $this->mostvisitedlabel,
            'mostvisiteddataset' => $this->mostvisiteddataset,
        ]);
    }
}
