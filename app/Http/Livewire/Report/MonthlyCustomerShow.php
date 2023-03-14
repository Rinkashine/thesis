<?php

namespace App\Http\Livewire\Report;
use App\Models\User;
use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;
use App\Models\CustomerOrder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;


class MonthlyCustomerShow extends Component
{   use WithPagination;


    protected $users;
    public function mount($from, $to, $month, $year){
        // $this->users = $users
        $this->from = $from;
        $this->to = $to;
        $this->month = $month;
        $this->year = $year;

        $this->perPage = 9;
        // dd($this->to);
    }
    public function render()
    {
        $this->users = Customer::select([
            'customers.id',
            'customers.name',
            'customers.created_at',
            'customers.birthday',
            'customers.email',
            'customers.phone_number',
            'customers.photo',
            DB::raw(value: 'MONTHNAME(customers.created_at) as month_name'),
        ])
        ->where('customers.created_at', '>=', $this->from)
        ->where('customers.created_at', '<=', $this->to)
        ->orderBy('customers.created_at','asc')
        ->paginate($this->perPage);
        return view('livewire.report.monthly-customer-show',[
            'users' => $this->users,
            'date' => date("F", mktime(0, 0, 0, $this->month, 10)).' '.$this->year
        ]);
    }
}
