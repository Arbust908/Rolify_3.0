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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Monster::class, function (Faker\Generator $faker) {
    return [
      'name' =>  $faker->name,
      'size' =>  $faker->randomElement($array = array ('tiny','small','regular','big','giant','gargantuan')),
      'race' =>  $faker->word,
      'aligment' =>  $faker->randomElement($array = array ('LG','LN','LE','NG','TN','NE','CG','CN','CE')),
      'armorClass' =>  $faker->numberBetween(1, 24),
      'hitPoints' =>  $faker->numberBetween(1, 900),
      'speed' =>  $faker->numberBetween(5, 60),
      'str' =>  $faker->numberBetween(1, 20),
      'dex' =>  $faker->numberBetween(1, 20),
      'con' =>  $faker->numberBetween(1, 20),
      'int' =>  $faker->numberBetween(1, 20),
      'wis' =>  $faker->numberBetween(1, 20),
      'cha' =>  $faker->numberBetween(1, 20),
      'saveingThrow' =>  $faker->word,
      'skills' =>  $faker->word,
      'damageImmunities' =>  $faker->word,
      'languages' =>  $faker->word,
      'senses' =>  $faker->word,
      'challengeRating' =>  $faker->numberBetween(1, 35),
      'traits' =>  $faker->sentence($nbWords = 12, $variableNbWords = true),
      'actions' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
      'legendaryActions' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
      'rarity' =>  $faker->randomElement($array = array ('common','uncommon','rare','exotic','legendary','unique')),
    ];
});
