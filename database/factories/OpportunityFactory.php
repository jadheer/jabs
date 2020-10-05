<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Opportunity::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(15,true),
        'description' => $faker->text(500),
        'category_id' => App\Models\Lookups\Category::all()->random()->id,
        'country_id' => App\Models\Lookups\Country::all()->random()->id,
        'deadline' => $faker->dateTime(),
        'organizer' => $faker->company,
        'created_by' => App\User::all()->random()->id,
    ];
});
