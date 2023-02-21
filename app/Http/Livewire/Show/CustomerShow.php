<?php

namespace App\Http\Livewire\Show;

use Livewire\Component;
use App\Models\Customer;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\Gate;
use Livewire\WithPagination;
class CustomerShow extends Component
{
    use WithPagination;
    public $sorting;
    public $perPage = 10;
    public $search = null;
    protected $queryString = ['search' => ['except' => '']];
    protected $paginationTheme = 'bootstrap';

    public $customer_id,$name,$email,$phone,$gender,$birthday,$photo;

    public function mount($customer){
        if($customer){
            $this->customer_id = $customer->id;
            $this->name = $customer->name;
            $this->email = $customer->email;
            $this->phone = $customer->phone_number;
            $this->gender = $customer->gender;
            $this->birthday = $customer->birthday;
            $this->photo = $customer->photo;
        }
    }
    public function render()
    {
        $listoforders = CustomerOrder::where('customers_id',$this->customer_id)
        ->where('id','like','%'.$this->search.'%')
        ->orderby('created_at', 'desc')
        ->paginate($this->perPage);
        return view('livewire.show.customer-show',[
            'listoforders' => $listoforders,
        ]);
    }
}
