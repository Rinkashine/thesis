<?php

namespace App\Http\Livewire\Report;

use Livewire\Component;
use App\Models\CancellationReason;
use Illuminate\Support\Facades\DB;

class CancellationReasonsReport extends Component
{
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
        if($this->sorting == 'cancellation_name_asc'){
            $this->column_name = "name";
            $this->order_name = "asc";
        }elseif($this->sorting == 'cancellation_name_desc'){
            $this->column_name = "name";
            $this->order_name = 'desc';
        }elseif($this->sorting == 'total_spent_asc'){
            $this->column_name = 'total';
            $this->order_name = "asc";
        }elseif($this->sorting == 'total_spent_desc'){
            $this->column_name = 'total';
            $this->order_name = 'desc';
        }
        $cancellations = CancellationReason::select([
            'name',
            'cancellation_reason.id',
            DB::raw(value: 'COUNT(CASE WHEN customer_order.status = "Cancelled" then customer_order.cancellation_reason_id end) as total'),
        ])
        ->leftjoin('customer_order',function($join){
            $join->on('cancellation_reason.id', '=', 'customer_order.cancellation_reason_id')
            ->where('customer_order.created_at', '>=', $this->from)
            ->where('customer_order.created_at', '<=', $this->to.' 23:59:59');
        })
        ->where('cancellation_reason.name','like','%'.$this->search.'%')
        ->groupBy('name','cancellation_reason.id')
        ->orderBy($this->column_name, $this->order_name)
        ->paginate($this->perPage);
        // ->get();
        return view('livewire.report.cancellation-reasons-report',[
            'cancellations' => $cancellations
        ]);
    }
}
