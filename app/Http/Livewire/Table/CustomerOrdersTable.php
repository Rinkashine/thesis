<?php

namespace App\Http\Livewire\Table;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Auth;
class CustomerOrdersTable extends Component
{
    use WithPagination;

    public $perPage = 10;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $customer_id = Auth::guard('customer')->user()->id;
        $Orders = CustomerOrder::with('customers')
        ->where('customers_id',$customer_id)
        ->orderby('created_at','desc')
        ->paginate($this->perPage);

            return view('livewire.table.customer-orders-table',[
            'Orders' => $Orders,
        ]);
    }
}
