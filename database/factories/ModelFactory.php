<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'login' => $faker->login,
        
        'password' => $password ?: $password = bcrypt('secret'),
        'id_role' => $faker->id_role,
        'nom' => $faker->nom,
        'prenom' => $faker->prenom,
        'sex' => $faker->sex,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->telephone,
        'remember_token' => str_random(10),
    ];
});
