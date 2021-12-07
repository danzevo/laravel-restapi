<?php

namespace Database\Seeders;

use App\Models\Merchant;
use Illuminate\Database\Seeder;

class MerchantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merchant::insert([
            [
                'user_id' => 1,
                'merchant_name' => 'merchant 1',
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'user_id' => 2,
                'merchant_name' => 'merchant 2',
                'created_by' => 2,
                'updated_by' => 2,
            ]
        ]);
    }
}
