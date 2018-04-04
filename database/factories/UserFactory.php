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
        'birthdate' => $faker->date(),
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'image' => $faker->imageUrl(),
        'points' => 0,
        'code' => str_random(10)
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(),
        'image' => $faker->imageUrl()
    ];
});

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'logo' => $faker->imageUrl(),
        'website' => $faker->url,
        'category_id' => $faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
    ];
});

/*$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(),
        'image' => $faker->imageUrl(),
        'price' => $faker->randomFloat(),
        'quantity' => $faker->randomDigit,
        'brand_id' => $faker->randomDigit(1, 100)
    ];
});*/
