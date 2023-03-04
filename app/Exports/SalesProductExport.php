<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\SalesProduct;
use App\Models\CustomerOrder;
use App\Models\OrderedProduct;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SalesProductExport implements FromCollection, ShouldAutoSize,WithHeadings,WithMapping
{
    protected $sorting,$column_name,$order_name,$startdate,$enddate;

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
        if($this->sorting == 'product_name_asc'){
            $this->column_name = "name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'product_name_desc'){
            $this->column_name = "name";
            $this->order_name = 'desc';
        }
        elseif($this->sorting == 'total_sales_asc'){
            $this->column_name = 'total_sales';
            $this->order_name = "asc";
        }elseif($this->sorting == 'total_sales_desc'){
            $this->column_name = 'total_sales';
            $this->order_name = 'desc';
        }elseif($this->sorting == 'order_quantity_asc'){
            $this->column_name = 'quantity';
            $this->order_name = "asc";
        }elseif($this->sorting == 'order_quantity_desc'){
            $this->column_name = 'quantity';
            $this->order_name = 'desc';
        }else{
            $this->column_name = "name";
            $this->order_name = "asc";
        }

        return Product::select([
            'product.id',
            'product.name',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity else 0 end) AS quantity'),
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity * ordered_products.price  else 0 end) as total_sales')
        ])
        ->leftjoin('ordered_products', 'product.name', '=', 'ordered_products.product_name')
        ->leftjoin('customer_orders', function($join){
            $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
            ->where('customer_orders.created_at', '>', $this->startdate)
            ->where('customer_orders.created_at', '<', $this->enddate);
        })
        ->groupBy('product.name','product.id')
        ->orderBy($this->column_name, $this->order_name)
        ->get();
    }

    public function map($product): array
    {
        return [
            $product->name,
            number_format($product->quantity,2),
            number_format($product->total_sales,2),
        ];
    }
    public function headings(): array
    {
        return [
            'Product Name',
            'Total Quantity',
            'Total Sales',
        ];
    }
}
