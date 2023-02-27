<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\CustomerOrder;
class PaymentType extends Component
{
    public $startdate = "2022-02-19";
    public $enddate ="2023-02-20";
    public $paymenttypedataset;
    public function render()
    {
        $cod = CustomerOrder::where('status','Completed')
        ->where('mode_of_payment', "Cash On Delivery")
        ->where('created_at', '>=', $this->startdate)
        ->where('created_at', '<=', $this->enddate)
        ->get()
        ->count();

        $paypal = CustomerOrder::where('status','Completed')
        ->where('mode_of_payment', "Paid by Paypal")
        ->where('created_at', '>=', $this->startdate)
        ->where('created_at', '<=', $this->enddate)
        ->get()
        ->count();

        $this->paymenttypedataset = [];
        array_push($this->paymenttypedataset, $cod);
        array_push($this->paymenttypedataset, $paypal);

        $paymenttypelabel = ["Cash On Delivery", "Paypal"];

        $this->dispatchBrowserEvent('render-chart', [
            "label" => $paymenttypelabel,
            "dataset" => $this->paymenttypedataset,
        ]);

        return view('livewire.report.payment-type',[
            'paymenttypelabel' => $paymenttypelabel,
            'paymenttypedataset' => $this->paymenttypedataset,
        ]);
    }
}
