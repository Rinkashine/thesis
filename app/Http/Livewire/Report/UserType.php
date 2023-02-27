<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UserType extends Component
{
    public $startdate = "2023-02-19";
    public $enddate ="2023-02-20";
    public $usertype;
    public $usertypelabel = [];
    public $usertypedataset = [];

    public function cleanVars(){
        $this->usertypelabel = [];
        $this->usertypedataset = [];
    }
    public function render()
    {
        $this->cleanVars();

        if($this->enddate< $this->startdate){
            $this->startdate = $this->enddate;
        }else{
            $st = Carbon::createFromFormat('Y-m-d', $this->startdate);
            $ed = Carbon::createFromFormat('Y-m-d', $this->enddate);
            $period = Period::create($st,$ed);

            $this->usertype = Analytics::fetchUserTypes($period);

            foreach($this->usertype as $type){
                array_push($this->usertypelabel, $type['type']);
                array_push($this->usertypedataset, $type['sessions']);
            }

            $this->dispatchBrowserEvent('render-chart', [
                "label" => $this->usertypelabel,
                "dataset" => $this->usertypedataset,
            ]);
        }



        return view('livewire.report.user-type',[
            'usertype' => $this->usertype,
            'usertypelabel' => $this->usertypelabel,
            'usertypedataset' => $this->usertypedataset
        ]);
    }
}
