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
       'customer_order_items_id',
       'customer_order_id',
       'comment',
       'rate',
       'customer_id',
   ];

   public function reviewTransactions()
   {
       return $this->hasOne(OrderedProduct::class, 'id','ordered_products_id');
   }

   public function customer_reviews(){
        return $this->belongsTo(OrderedProduct::class);
    }
}
?>
