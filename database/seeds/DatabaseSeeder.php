<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Carolinian;
use App\Company;
use App\Course;
use App\Department;
use App\Industry;
use App\Job;
use App\School;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {

            DB::table('schools')->insert([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now')
            ]);

        }

        $schoolsIDs = DB::table('schools')->pluck('id');
        foreach (range(1,10) as $index) {

            DB::table('departments')->insert([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'school_id' => $faker->randomElement($schoolsIDs),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now')
            ]);
        }

        $departmentsIDs = DB::table('departments')->pluck('id');
        foreach (range(1,10) as $index) {

            DB::table('courses')->insert([
                'name' => $faker->name,
                'description' => $faker->paragraph,
                'department_id' => $faker->randomElement($departmentsIDs),
                'created_at' => $faker->dateTime($max = 'now'),
                'updated_at' => $faker->dateTime($max = 'now')
            ]);
        }
    }
}
