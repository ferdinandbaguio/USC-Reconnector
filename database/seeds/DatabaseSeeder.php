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
        // $this->call(DepartmentTableSeeder::class);
        // $this->call(CourseTableSeeder::class);
        // $this->call(CarolinianTableSeeder::class);
       

        
        // foreach (range(1,10) as $index) {

        //     DB::table('schools')->insert([
        //         'name' => 'School of Arts and Sciences',
        //         'description' => $faker->paragraph,
        //         'created_at' => $faker->dateTime($max = 'now'),
        //         'updated_at' => $faker->dateTime($max = 'now')
        //     ]);

        // }

        // $schoolsIDs = DB::table('schools')->pluck('id');
        // foreach (range(1,10) as $index) {

        //     DB::table('departments')->insert([
        //         'name' => 'Department of Computer Information and Sciences',
        //         'description' => $faker->paragraph,
        //         'school_id' => $faker->randomElement($schoolsIDs),
        //         'created_at' => $faker->dateTime($max = 'now'),
        //         'updated_at' => $faker->dateTime($max = 'now')
        //     ]);
        // }

        // $departmentsIDs = DB::table('departments')->pluck('id');
        // foreach (range(1,1) as $index) {

        //     DB::table('courses')->insert([
        //         ['name' => 'Computer Science',
        //          'description' => $faker->paragraph,
        //          'department_id' => $faker->randomElement($departmentsIDs),
        //          'created_at' => $faker->dateTime($max = 'now'),
        //          'updated_at' => $faker->dateTime($max = 'now')
        //         ],
        //         ['name' => 'Information Technology',
        //          'description' => $faker->paragraph,
        //          'department_id' => $faker->randomElement($departmentsIDs),
        //          'created_at' => $faker->dateTime($max = 'now'),
        //          'updated_at' => $faker->dateTime($max = 'now')
        //         ],
        //         ['name' => 'Information Communication Technology',
        //          'description' => $faker->paragraph,
        //          'department_id' => $faker->randomElement($departmentsIDs),
        //          'created_at' => $faker->dateTime($max = 'now'),
        //          'updated_at' => $faker->dateTime($max = 'now')
        //         ]
        //     ]);
        // }
    }
}
