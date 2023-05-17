<?php

namespace App\Http\Livewire\Report;

use Analytics;
use Carbon\Carbon;
use Livewire\Component;
use Spatie\Analytics\Period;

class MostVisitedPage extends Component
{


    public $mostvisitedpage;

    public $mostvisitedlabel = [];

    public $mostvisiteddataset = [];

    protected $listeners = [
        'refreshParent' => '$refresh',
    ];

    public function render()
    {
        $this->mostvisitedlabel = [];
        $this->mostvisiteddataset = [];

        $this->mostvisitedpage = Analytics::fetchMostVisitedPages(Period::months(1), 10);

        foreach ($this->mostvisitedpage as $page) {
            array_push($this->mostvisitedlabel, $page['pageTitle']);
            array_push($this->mostvisiteddataset, $page['pageViews']);
        }

        $this->dispatchBrowserEvent('render-chart', [
            'label' => $this->mostvisitedlabel,
            'dataset' => $this->mostvisiteddataset,
        ]);


        return view('livewire.report.most-visited-page', [
            'mostvisitedpage' => $this->mostvisitedpage,
            'mostvisitedlabel' => $this->mostvisitedlabel,
            'mostvisiteddataset' => $this->mostvisiteddataset,
        ]);
    }
}
