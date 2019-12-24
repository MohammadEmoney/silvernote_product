<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use App\Models\Product;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});



$factory->define(Product::class, function (Faker $faker) {
    $gallery = [];
    $rand = rand(1,4);

    for($i = 0; $i < $rand; $i++){
        $gallery[] = $faker->imageUrl($width = 640, $height = 480);
    }

    return [
        'title' => $faker->catchPhrase(),
        'short_description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
        'description' => $faker->realText($maxNbChars = 500, $indexSize = 2),
        'price' => $faker->numberBetween($min = 10, $max = 1000),
        'discount' => $faker->numberBetween($min = 0, $max = 100),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'gallery' => json_encode($gallery),
        'category_id' => $faker->numberBetween($min = 1, $max = 50),
        'user_id' => $faker->numberBetween($min = 1, $max = 10),
        'is_on_sale' => $faker->boolean(),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase(),
        'description' => $faker->realText($maxNbChars = 500, $indexSize = 2),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'parent_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
