<?php

use Faker\Generator as Faker;
use App\News;
$factory->define(App\News::class, function (Faker $faker) {
    return [
     
            'title' => $faker->sentences(1, true),
            'content' => $faker->text(255),
            'user_id' => rand(5,9)
    ];
});
