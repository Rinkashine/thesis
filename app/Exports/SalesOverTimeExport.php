<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerOrder;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class SalesOverTimeExport implements FromCollection,WithHeadings,ShouldAutoSize,WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CustomerOrder::join('customer_order_item', 'customer_order.id', '=', 'customer_order_item.customer_order_id')
        ->select([
            DB::raw(value: 'YEAR(customer_order.created_at) as year'),
            DB::raw(value: 'MONTHNAME(customer_order.created_at) as month_name'),
            DB::raw(value: 'MONTH(customer_order.created_at) as month'),
            DB::raw(value: 'SUM(customer_order_item.quantity*customer_order_item.price) as total'),
        ])
        ->where('customer_order.status','Completed')
        ->groupBy('month_name', 'year','month')
        ->orderBy('year','asc')
        ->orderBy('month','asc')
        ->get();
    }
    public function map($sales): array
    {
        return [
            $sales->year,
            $sales->month_name,
            $sales->total,
        ];
    }
    public function headings(): array
    {
        return [
            'Year',
            'Month',
            'Total Sales'
        ];
    }
}
