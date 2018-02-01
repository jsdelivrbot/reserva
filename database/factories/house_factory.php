<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\House::class, function (Faker $faker) {
    $date = $faker->dateTimeThisDecade();


    return [
        'location' => ($faker->city. $faker->citySuffix),
        'direction' => $faker->streetAddress,
        'images' => 'https://picsum.photos/200/200/?image=' . mt_rand(0, 100),
        'name' => $faker->streetName,
        'price_user_night' => doubleval( rand(10, 100)),
        'users_comments' => $faker->realText(200),
        'rating' => doubleval( rand(0, 10)),
        'max_users_house' => rand(1, 9),
        'features' => $faker->realText(200),
        'activities' => $faker->realText(500),
        'description' => $faker->realText(200),
        'created_at' => Carbon::createFromTimestamp($date->getTimestamp()),
        'updated_at' => Carbon::createFromTimestamp($faker->dateTimeBetween($date, now())->getTimestamp())
    ];
});
