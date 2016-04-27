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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $faker = \Faker\Factory::create('it_IT');
    return [
        'name' => $faker->name,
        'nickname' => 'admin',
        'email' => $faker->unique()->email,
        'type' => $faker->randomElement(['supervisor','agent','agent','operator','operator','operator']),
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Tv::class, function (Faker\Generator $faker) {
    $faker = \Faker\Factory::create('it_IT');
    /*
     * NO FUNCIONA!!:
     * $faker->date('d/m/Y',dateTimeBetween($startDate='-78years', $endDate='-18years))
     * uso $faker->date('d/m/Y')
     */
    return [
        'brand' => $faker->lastName,
        'panel' => $faker->bothify('PNL-##??'),
        'available' => $faker->boolean(),
        'panel_place' => 'Corsia: '.$faker->randomDigit.' Ripiano: '.$faker->randomLetter,
        'main' => $faker->bothify('MN-##??'),
        'inverter' => $faker->bothify('INV-##??'),
        'power_supply' => $faker->bothify('PWR-##??'),
        'power_supply_alt' => $faker->bothify('ALT-##??'),
        't_con' => $faker->bothify('TCN-##??'),
        'mod_tv' => $faker->bothify('MTV-##??'),
        'note' => $faker->text
    ];
});