<?php

use Illuminate\Database\Seeder;
use App\Carolinian;
class CarolinianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Carolinian::class,100)->create();
	}	    
}
