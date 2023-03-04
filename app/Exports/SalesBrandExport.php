<?php

namespace App\Exports;

use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SalesBrandExport implements FromCollection, ShouldAutoSize,WithHeadings,WithMapping
{
    protected $startdate,$enddate,$sorting,$column_name,$order_name;

    function __construct($sorting,$startdate,$enddate){
        $this->sorting = $sorting;
        $this->startdate = $startdate;
        $this->enddate = $enddate;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if($this->sorting == 'brand_name_asc'){
            $this->column_name = "name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'brand_name_desc'){
            $this->column_name = "name";
            $this->order_name = 'desc';
        }elseif($this->sorting == 'total_sales_asc'){
            $this->column_name = 'total_sales';
            $this->order_name = "asc";
        }elseif($this->sorting == 'total_sales_desc'){
            $this->column_name = 'total_sales';
            $this->order_name = 'desc';
        }else{
            $this->column_name = "name";
            $this->order_name = "asc";
        }

        return Brand::select([
            'brand.id',
            'brand.name',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity * ordered_products.price else 0 end) as total_sales')
        ])
        ->leftjoin('product','brand.id','=','product.brand_id')
        ->leftjoin('ordered_products', 'product.name','=','ordered_products.product_name')
        ->leftjoin('customer_orders',function($join){
            $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
            ->where('customer_orders.created_at', '>', $this->startdate)
            ->where('customer_orders.created_at','<',$this->enddate);
        })
        ->groupBy('brand.id','brand.name')
        ->orderBy($this->column_name, $this->order_name)
        ->get();
    }

    public function map($brand): array
    {
        return [
            $brand->name,
            number_format($brand->total_sales,2)

        ];
    }

    public function headings(): array
    {
        return [
            'Brand Name',
            'Total Sales',
        ];
    }
}
