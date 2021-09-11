<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        $this->call(EmpresaTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(AdminTableSeeder::class);
<<<<<<< HEAD
        $this->call(ProductsSeeder::class);
        $this->call(KeysSeeder::class);
=======
>>>>>>> bb1eea3914d7f7682a63d03703dd34362e406f8d
        // \App\Models\User::factory(10)->create();
    }
}
