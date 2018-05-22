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

$factory->define(App\Store::class, function (Faker $faker) {
    //'name', 'address', 'description', 'website', 'longitude', 'latitude', 'zip_code', 'state', 'city'
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'description' => $faker->text,
        'website' => $faker->url,
        'longitude' => $faker->longitude,
        'latitude' => $faker->latitude,
        'zip_code' => $faker->randomNumber(),
        'state' => $faker->country,
        'city' => $faker->city,
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(),
        'image' => $faker->imageUrl(),
        'price' => $faker->randomFloat(),
        'quantity' => $faker->randomDigit,
        'brand_id' => $faker->randomElement([2,3,4,5,6,7,8])
    ];
});

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'image' => $faker->imageUrl(),
        'article_content' => $faker->paragraph,
        'views_count' => $faker->randomNumber(),
        'blogger_id' => 1,
    ];
});
