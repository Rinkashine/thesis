<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\OrderedProduct;
class CustomerOrderedProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('ordered_products') ->insert([
            [
                'customer_orders_id' => 104153205,
                'product_name' => 'Glomed Gloves',
                'price' => 490.00,
                'quantity' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153205,
                'product_name' => 'Microsuper Gloves',
                'price' => 250.00,
                'quantity' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153206,
                'product_name' => 'HCD Gloves',
                'price' => 400.00,
                'quantity' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153207,
                'product_name' => 'Misawa Medical Disposable Needle',
                'price' => 350.00,
                'quantity' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],


        ]);
    }
}
