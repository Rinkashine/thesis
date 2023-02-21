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
        return CustomerOrder::join('ordered_products', 'customer_orders.id', '=', 'ordered_products.customer_orders_id')
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
