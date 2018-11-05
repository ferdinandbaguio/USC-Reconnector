<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        factory(App\Models\User::class,100)->create();
        // factory(App\Models\Subject::class,20)->create();
        // factory(App\Models\Group_Class::class,15)->create();
        // factory(App\Models\Year::class,5)->create();
        // factory(App\Models\Semester::class,10)->create();
        // factory(App\Models\Schedule::class,15)->create();
        // factory(App\Models\Group_Schedule::class,20)->create();
        // factory(App\Models\Student_Class::class,150)->create();
        // $this->call(SchoolTableSeeder::class);
        // $this->call(UserTableSeeder::class);

    }
}
