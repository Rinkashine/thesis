<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;


    protected $table = 'product_review';

    protected $fillable = [
        'customer_id',
       'ordered_products_id',
       'customer_orders_id',
       'comment',
       'rate',
       'customer_id',
   ];
   public function customer_reviews(){
        return $this->belongsTo(OrderedProduct::class);
    }
}
