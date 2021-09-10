<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'company' => '1',
            'name' => 'Manager_System',
            'email' => 'administrador@email.com',
            'password' => bcrypt('admin@teste'),
            'cpf' => '309.081.058-19',
            'phone' => '(11) 9 6112-5777',
            'cep' => '06192140',
            'address' => 'Rua do Nosso programa',
            'number' => '1000',
            'city' => 'Software',
            'uf' => 'SF',
            'ative' => 'true',
            'paper' => '1',
            'profile_photo_path' => 'admin.jpg',
            'created_at' => '09/09/2021 20:50:00',
            'updated_at' => '09/09/2021 20:50:00',
        ]);
    }
}
