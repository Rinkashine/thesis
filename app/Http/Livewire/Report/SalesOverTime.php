<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerOrder;
class SalesOverTime extends Component
{
    public function render()
    {
        $monthlysales = CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
        ->select([
            DB::raw(value: 'YEAR(customer_orders.created_at) as year'),
            DB::raw(value: 'MONTHNAME(customer_orders.created_at) as month_name'),
            DB::raw(value: 'MONTH(customer_orders.created_at) as month'),
            DB::raw(value: 'SUM(ordered_products.quantity*ordered_products.price) as total'),
        ])
        ->where('customer_orders.status','Completed')
        ->groupBy('month_name', 'year','month')
        ->orderBy('year','asc')
        ->orderBy('month','asc')
        ->get();


        $saleschartlabel = [];
        $saleschartdataset = [];

        foreach($monthlysales as $sales){
           array_push($saleschartlabel, $sales->year.'-'.$sales->month_name);
           array_push($saleschartdataset,$sales->total);
        }

        return view('livewire.report.sales-over-time',[
            'monthlysales' => $monthlysales,
            'saleschartlabel' => $saleschartlabel,
            'saleschartdataset' => $saleschartdataset
        ]);
    }
}
