<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    use HasFactory;

    protected $table = 'customer_order';

    protected $fillable = [
        'customers_id',
        'shippingfee',
        'mode_of_payment',
        'payment_id',
        'status',
        'rejected_reason',
        'order_notes',
        'received_by',
        'phone_number',
        'notes',
        'house',
        'province',
        'city',
        'barangay',
        'cancellation_reason_id',
        'cancellation_details',
    ];

    public static function search($search)
    {
        return empty($search) ? static::query() :
        static::query()->where('id', 'like', '%'.$search.'%');
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }

    public function cancellation_reason()
    {
        return $this->belongsTo(CancellationReason::class);
    }

    public function orderTransactions()
    {
        return $this->hasMany(CustomerOrderItems::class, 'customer_order_id', 'id');
    }
}
