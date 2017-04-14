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
use Illuminate\Support\Facades\Hash;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'prenom' => $faker->firstName,
        'nom' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => hash::make('secret'),
        'admin' => rand(0,1),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Commentaire::class, function (Faker\Generator $faker) {

    return [
        'contenu' => $faker->text,
        'auteur' => $faker->name,
        'user_id' => $faker->numberBetween(1,30),
    ];
});

$factory->define(App\Note::class, function (Faker\Generator $faker) {

    return [
        'note' => rand(0, 20),
        'user_id' => $faker->numberBetween(1,30),
    ];
});