<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\School::class, function (Faker $faker) {
    return [
        'name' => 'School',
        'description' =>  $faker->paragraph
    ];
});

$factory->define(App\Department::class, function (Faker $faker) {
    return [
        'name'        => 'Department',
        'description' => $faker->paragraph,
        // 'school_id'   => factory(App\School::class)->create()->id

    ];
});

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'name'        =>' Course',
        'description' => $faker->paragraph,
        // 'department_id'   => factory(App\Department::class)->create()->id
    ];
});



$factory->define(App\Carolinian::class, function (Faker $faker) {
    $course_id = App\Course::pluck('id');
    $arrayValues = ['Student', 'Teacher',
                                  'Alumni', 'Admin',
                                  'Coordinator', 'Chair'];
    $idnumber = '14'. $faker->unique()->numberBetween($min = 100000 , $max = 999999);
    return [
            'firstname'     => $faker->firstName,
            'middlename'    => $faker->lastName,
            'lastname'      => $faker->lastName,
            'idNumber'      => $idnumber,
            'gender'        => 'Male',
            'password'      => $idnumber,
            'description'   => $faker->paragraph,
            'yearLevel'     => '4',    
            'userType'      => $faker->randomElement($arrayValues),
            'course_id'     => $faker->randomElement($course_id)

    ];
});
