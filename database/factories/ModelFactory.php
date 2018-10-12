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
        $pictureMaleValues = ['img/alt_imgs/default_male.png', 'img/alt_imgs/default_male1.png', 'img/alt_imgs/default_male2.png'];
        $pictureFemaleValues = ['img/alt_imgs/default_female.png', 'img/alt_imgs/default_female1.png', 'img/alt_imgs/default_female2.png'];
        $sexValues = ['Male', 'Female'];
        $statusValues = ['Approved', 'Pending','Denied'];               
        $updateStatusValues = ['Updated', 'Outdated', 'Recent'];
        $roleValues= ['Student', 'Teacher', 'Alumnus', 'Admin', 'Coordinator', 'Chair'];

        $sex = $faker->randomElement($sexValues);
        if($sex == 'Male'){
            $picture = $faker->randomElement($pictureMaleValues);
        }
        else if($sex == 'Female'){
            $picture = $faker->randomElement($pictureFemaleValues);
        }

	    $idnumber = '14'. $faker->unique()->numberBetween($min = 100000 , $max = 999999);
        
	    return [
            'idnumber'      => $idnumber,
            'picture'       => $picture,
            'email'         => $faker->email,
            'password'      => bcrypt($idnumber),
            'sex'           => $sex,
	        'firstName'     => $faker->firstName,
            'middleName'    => $faker->lastName,
            'lastName'      => $faker->lastName,
            'email'         => $faker->firstName.'.'.$faker->lastName.'@gmail.com',
            'description'   => $faker->paragraph,
            'yearLevel'     => $faker->numberBetween($min = 1, $max = 5),    
            'userType'      => $faker->randomElement($roleValues),
            'userStatus'	=> $faker->randomElement($statusValues),
	        'remember_token' => str_random(10),
	    ];
});

// $factory->define(App\Models\User::class, function (Faker $faker) {
// 
// });