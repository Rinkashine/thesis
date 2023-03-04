<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class CustomerSalesTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $from ='2023-01-01T00:00';
    public $to ='2023-12-31T00:00';

    public $sorting = 'total_spent_desc';
    public $column_name;
    public $order_name;
    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];

    public function render()
    {
        if($this->sorting == 'customer_name_asc'){
            $this->column_name = "name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'customer_name_desc'){
            $this->column_name = "name";
            $this->order_name = 'desc';
        }elseif($this->sorting == 'total_spent_asc'){
            $this->column_name = 'total_spent';
            $this->order_name = "asc";
        }elseif($this->sorting == 'total_spent_desc'){
            $this->column_name = 'total_spent';
            $this->order_name = 'desc';
        }else{
            $this->column_name = "name";
            $this->order_name = "asc";
        }


        $customers = Customer::select([
            'customers.id',
            'customers.name',
            'customers.email',
            DB::raw(value: 'sum(CASE WHEN customer_orders.status = "Completed" then ordered_products.quantity else 0 end) AS order_quantity'),
            DB::raw(value: 'sum(CASE WHEN customer_orders.status = "Completed" then ordered_products.price * ordered_products.quantity else 0 end) AS total_spent')
        ])
        ->leftjoin('customer_orders','customers.id','=','customer_orders.customers_id')
        ->leftjoin('ordered_products',function($join){
            $join->on('ordered_products.customer_orders_id', '=', 'customer_orders.id')
            ->where('customer_orders.created_at', '>', $this->from)
            ->where('customer_orders.created_at','<',$this->to);
        })
        ->where('customers.name','like','%'.$this->search.'%')
        ->orwhere('customers.email','like','%'.$this->search.'%')
        ->groupBy('customers.name','customers.id','customers.email')
        ->orderBy($this->column_name, $this->order_name)
        ->paginate($this->perPage);


        return view('livewire.report.customer-sales-table',[
            'customers' => $customers
        ]);
    }
}
