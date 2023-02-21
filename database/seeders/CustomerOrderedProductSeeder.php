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
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153205,
                'product_name' => 'Microsuper Gloves',
                'price' => 250.00,
                'quantity' => 2,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153206,
                'product_name' => 'HCD Gloves',
                'price' => 400.00,
                'quantity' => 5,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153207,
                'product_name' => 'Stainless Steel Impression Tray',
                'price' => 580.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153208,
                'product_name' => 'Glomed Gloves',
                'price' => 490.00,
                'quantity' => 2,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153209,
                'product_name' => 'Ligatures',
                'price' => 120.00,
                'quantity' => 8,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153210,
                'product_name' => 'Crimpable Hooks',
                'price' => 750.00,
                'quantity' => 10,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153211,
                'product_name' => 'Tudor Chromic Absorbable Suture',
                'price' => 350.00,
                'quantity' => 4,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153212,
                'product_name' => 'Paper Point',
                'price' => 200.00,
                'quantity' => 2,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153208,
                'product_name' => 'Well-Paste',
                'price' => 1650.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153207,
                'product_name' => 'Surgical Sunction Tip',
                'price' => 20.00,
                'quantity' => 10,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153209,
                'product_name' => 'Micro Saliva Ejector',
                'price' => 200.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            //--------------
            [
                'customer_orders_id' => 104153213,
                'product_name' => 'Well-Pex',
                'price' => 1650.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153214,
                'product_name' => 'Defenders Mask',
                'price' => 750.00,
                'quantity' => 7,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153215,
                'product_name' => 'Jeltrate',
                'price' => 250.00,
                'quantity' => 5,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153216,
                'product_name' => 'Micro Motor',
                'price' => 500.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153216,
                'product_name' => 'Mini MBT',
                'price' => 230.00,
                'quantity' => 6,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153217,
                'product_name' => 'Co Axial Wire',
                'price' => 1100.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153218,
                'product_name' => 'Open Coil Spring',
                'price' => 900.00,
                'quantity' => 2,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153219,
                'product_name' => 'Cavity Liner',
                'price' => 770.00,
                'quantity' => 2,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153220,
                'product_name' => 'Xylocaine Pump Spray',
                'price' => 1800.00,
                'quantity' => 2,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153220,
                'product_name' => 'Xylestesin',
                'price' => 1900.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153220,
                'product_name' => 'Articaine',
                'price' => 1800.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
            [
                'customer_orders_id' => 104153215,
                'product_name' => 'Micro Saliva Ejector',
                'price' => 200.00,
                'quantity' => 3,
                // 'created_at' => Carbon::now(),
                // 'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
