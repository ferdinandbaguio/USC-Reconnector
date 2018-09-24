<?php

use Illuminate\Database\Seeder;
use App\Models\Carolinian;
class CarolinianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Carolinian::class,100)->create();
	}	    
}
