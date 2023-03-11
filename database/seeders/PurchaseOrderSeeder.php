<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PurchaseOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('purchase_order')->insert([
            /*
            [
                'suppliers_id' => 3,
                'status' => "Draft",
                'shipping_date' => '2023-02-24',
                'tracking' => "11109414",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],[
                'suppliers_id' => 4,
                'status' => "Draft",
                'shipping_date' => '2023-02-25',
                'tracking' => "11109415",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'suppliers_id' => 3,
                'status' => "Draft",
                'shipping_date' => '2023-02-26',
                'tracking' => "11109416",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'suppliers_id' => 3,
                'status' => "Draft",
                'shipping_date' => '2023-02-27',
                'tracking' => "11109417",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            */

        ]);
    }
}
