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

$factory->define(App\Models\User::class, function (Faker $faker) {
        $sexValues = ['Male', 'Female'];
        $statusValues = ['Approved', 'Pending','Denied'];               
        $updateStatusValues = ['Updated', 'Outdated', 'Recent'];
        $roleValues= ['Student', 'Teacher', 'Alumnus', 'Admin', 'Coordinator', 'Chair'];

	    $idnumber = '14'. $faker->unique()->numberBetween($min = 100000 , $max = 999999);
        
	    return [
            'idnumber'      => $idnumber,
            'email'         => $faker->email,
            'password'      => bcrypt($idnumber),
            'sex'           => $faker->randomElement($sexValues),
	        'firstName'     => $faker->firstName,
            'middleName'    => $faker->lastName,
            'lastName'      => $faker->lastName,
            'email'         => $faker->firstName.'.'.$faker->lastName.'@gmail.com',
            'description'   => $faker->paragraph,
            'yearLevel'     => $faker->numberBetween($min = 1, $max = 5),    
            'userType'      => $faker->randomElement($roleValues),
            'userStatus'	=>  $faker->randomElement($statusValues),
	        'remember_token' => str_random(10),
	    ];
});