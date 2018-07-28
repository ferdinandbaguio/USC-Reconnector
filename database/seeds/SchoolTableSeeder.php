<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\School;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  
	    factory(App\School::class,10)
		    ->create()
		    ->each(function($school) {
			    $school->department()
			           ->saveMany( factory(App\Department::class,2)
			           ->create(['school_id' => $school->id]))
			           ->each(function($department){
			             $department->course()
			             	->saveMany(factory(App\Course::class,2)
			             	->create(['department_id' => $department->id]));
			        	});
			});
    }
}
