<?php

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Industry;
use App\Models\Job;
use App\Models\School;
use App\Models\Department;
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
        $this->call(CarolinianTableSeeder::class);
    }
}
