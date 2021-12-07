<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::insert([
            ['merchant_id' => 1, 'outlet_id' => 1, 'bill_total' => 2000, 'created_at' => '2021-11-01 12:30:04', 'created_by' => 1, 'updated_at' => '2021-11-01 12:30:04', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 1, 'bill_total' => 2500, 'created_at' => '2021-11-01 17:20:14', 'created_by' => 1, 'updated_at' => '2021-11-01 17:20:14', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 1, 'bill_total' => 4000, 'created_at' => '2021-11-02 12:30:04', 'created_by' => 1, 'updated_at' => '2021-11-02 12:30:04', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 1, 'bill_total' => 1000, 'created_at' => '2021-11-04 12:30:04', 'created_by' => 1, 'updated_at' => '2021-11-04 12:30:04', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 1, 'bill_total' => 7000, 'created_at' => '2021-11-05 16:59:30', 'created_by' => 1, 'updated_at' => '2021-11-05 16:59:30', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 3, 'bill_total' => 2000, 'created_at' => '2021-11-02 18:30:04', 'created_by' => 1, 'updated_at' => '2021-11-02 18:30:04', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 3, 'bill_total' => 2500, 'created_at' => '2021-11-03 17:20:14', 'created_by' => 1, 'updated_at' => '2021-11-03 17:20:14', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 3, 'bill_total' => 4000, 'created_at' => '2021-11-04 12:30:04', 'created_by' => 1, 'updated_at' => '2021-11-04 12:30:04', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 3, 'bill_total' => 1000, 'created_at' => '2021-11-04 12:31:04', 'created_by' => 1, 'updated_at' => '2021-11-04 12:31:04', 'updated_by' => 1],
            ['merchant_id' => 1, 'outlet_id' => 3, 'bill_total' => 7000, 'created_at' => '2021-11-05 16:59:30', 'created_by' => 1, 'updated_at' => '2021-11-05 16:59:30', 'updated_by' => 1],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 2000, 'created_at' => '2021-11-01 18:30:04', 'created_by' => 2, 'updated_at' => '2021-11-01 18:30:04', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 2500, 'created_at' => '2021-11-02 17:20:14', 'created_by' => 2, 'updated_at' => '2021-11-02 17:20:14', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 4000, 'created_at' => '2021-11-03 12:30:04', 'created_by' => 2, 'updated_at' => '2021-11-03 12:30:04', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 1000, 'created_at' => '2021-11-04 12:31:04', 'created_by' => 2, 'updated_at' => '2021-11-04 12:31:04', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 7000, 'created_at' => '2021-11-05 16:59:30', 'created_by' => 2, 'updated_at' => '2021-11-05 16:59:30', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 2000, 'created_at' => '2021-11-05 18:30:04', 'created_by' => 2, 'updated_at' => '2021-11-05 18:30:04', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 2500, 'created_at' => '2021-11-06 17:20:14', 'created_by' => 2, 'updated_at' => '2021-11-06 17:20:14', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 4000, 'created_at' => '2021-11-07 12:30:04', 'created_by' => 2, 'updated_at' => '2021-11-07 12:30:04', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 1000, 'created_at' => '2021-11-08 12:31:04', 'created_by' => 2, 'updated_at' => '2021-11-08 12:31:04', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 7000, 'created_at' => '2021-11-09 16:59:30', 'created_by' => 2, 'updated_at' => '2021-11-09 16:59:30', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 1000, 'created_at' => '2021-11-10 12:31:04', 'created_by' => 2, 'updated_at' => '2021-11-10 12:31:04', 'updated_by' => 2],
            ['merchant_id' => 2, 'outlet_id' => 2, 'bill_total' => 7000, 'created_at' => '2021-11-11 16:59:30', 'created_by' => 2, 'updated_at' => '2021-11-11 16:59:30', 'updated_by' => 2]
        ]);
    }
}
