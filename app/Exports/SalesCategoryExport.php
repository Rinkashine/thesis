<?php

namespace App\Exports;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SalesCategoryExport implements FromCollection, ShouldAutoSize,WithHeadings,WithMapping
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

        if($this->sorting == 'category_name_asc'){
            $this->column_name = "name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'category_name_desc'){
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


        return Category::select([
            'category.id',
            'category.name',
            DB::raw(value: 'SUM(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity * ordered_products.price else 0 end) as total_sales')
            ])->leftjoin('product','category.id','=','product.category_id')
            ->leftjoin('ordered_products', 'product.name','=','ordered_products.product_name')
            ->leftjoin('customer_orders',function($join){
                $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
                ->where('customer_orders.created_at', '>', $this->startdate)
                ->where('customer_orders.created_at','<',$this->enddate);
            })
            ->groupBy('category.id','category.name')
            ->orderBy($this->column_name, $this->order_name)
            ->get();
    }

    public function map($category): array
    {
        return [
            $category->name,
            number_format($category->total_sales,2)

        ];
    }

    public function headings(): array
    {
        return [
            'Category Name',
            'Total Sales',
        ];
    }
}
