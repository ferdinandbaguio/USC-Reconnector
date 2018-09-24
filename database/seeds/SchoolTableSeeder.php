<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\School;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	  
	     factory(App\Models\School::class,10)  // 10 is the total pila e create
		    ->create()
		    ->each(function($school) { //each time mag create, do this
			    $school->department() //$school is the model/class and department is the eloquent(relationship).. 
			           ->saveMany( factory(App\Models\Department::class,2) // saveMany because schools has many depts check Schools.php
			           ->create(['school_id' => $school->id]))
			           ->each(function($department){
			             $department->course()
			             	->saveMany(factory(App\Models\Course::class,3)
			             	->create(['department_id' => $department->id]));
			        	});
			});
    }
}
