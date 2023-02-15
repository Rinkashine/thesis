<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\CustomerOrder;

class CustomerOrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_orders') ->insert([
            [
                'customers_id' => 1,
                'subtotal' => 1480.00,
                'shippingfee' =>100.00 ,
                'total' => 1580.00,
                'mode_of_payment' => 'Cash On Delivery',
                'status' => 'Completed',
                'received_by' => 'Mark Joseph Manalo',
                'phone_number' => '09369332354',
                'notes' => 'Yellow Gate',
                'house' => '283 Ramos Compound Baesa Quezon City',
                'province' => 'Second District(NCR)',
                'city' => 'Quezon City',
                'barangay' => "Baesa",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customers_id' => 1,
                'subtotal' => 2000.00,
                'shippingfee' =>100.00 ,
                'total' => 2100.00,
                'mode_of_payment' => 'Cash On Delivery',
                'status' => 'Completed',
                'received_by' => 'Mark Joseph Manalo',
                'phone_number' => '09369332354',
                'notes' => 'Yellow Gate',
                'house' => '283 Ramos Compound Baesa Quezon City',
                'province' => 'Second District(NCR)',
                'city' => 'Quezon City',
                'barangay' => "Baesa",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'customers_id' => 1,
                'subtotal' => 350.00,
                'shippingfee' =>100.00 ,
                'total' => 450.00,
                'mode_of_payment' => 'Cash On Delivery',
                'status' => 'Pending for Approval',
                'received_by' => 'Mark Joseph Manalo',
                'phone_number' => '09369332354',
                'notes' => 'Yellow Gate',
                'house' => '283 Ramos Compound Baesa Quezon City',
                'province' => 'Second District(NCR)',
                'city' => 'Quezon City',
                'barangay' => "Baesa",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ]);
    }
}
