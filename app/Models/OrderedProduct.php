<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedProduct extends Model
{
    use HasFactory;
    protected $table = 'ordered_products';
    protected $fillable = [
        'customer_orders_id',
        'product_name',
        'price',
        'quantity',
    ];
    public function customer_orders(){
        return $this->belongsTo(CustomerOrder::class);
    }


}
