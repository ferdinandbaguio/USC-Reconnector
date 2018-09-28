<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        factory(App\Models\User::class,100)->create();
        // $this->call(SchoolTableSeeder::class);
        // $this->call(UserTableSeeder::class);

    }
}
