<?php

use Illuminate\Database\Seeder;
use App\Company;
use App\Industry;
use App\Job;
use App\School;
use App\Department;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
        $this->call(SchoolTableSeeder::class);
      
    }
}
