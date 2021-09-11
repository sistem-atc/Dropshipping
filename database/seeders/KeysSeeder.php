<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KeysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keys')->insert([
            'id_user' => '4',
            'name_dp' => 'Mercado Livre',
            'appid' => '4575188470297160',
            'secretkey' => 'PwN9rqtr8866ywmUbtByhWopCkkqfC9j',
            'created_at' => '2021-09-10 23:46:06',
            'updated_at' => '2021-09-10 23:46:06',
        ]);
    }
}
