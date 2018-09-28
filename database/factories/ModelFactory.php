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
		$roleValues = ['Student', 'Teacher',
	                    'Alumnus', 'Admin',
                        'Coordinator', 'Chair'];
        $statusValues = ['Approved', 'Pending'];
        $sexValues = ['Male', 'Female'];
	    $idnumber = '14'. $faker->unique()->numberBetween($min = 100000 , $max = 999999);
	   
	    return [
	        'firstName'     => $faker->firstName,
            'middleName'    => $faker->lastName,
            'lastName'      => $faker->lastName,
            'idnumber'      => $idnumber,
            'sex'           => $faker->randomElement($sexValues),
            'password'      => bcrypt($idnumber),
            'description'   => $faker->paragraph,
            'yearLevel'     => '4',    
            'userType'      => $faker->randomElement($roleValues),
            'userStatus'	=>  $faker->randomElement($statusValues),
	        'remember_token' => str_random(10),
	    ];
});