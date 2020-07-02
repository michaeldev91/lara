<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\blogPost;
use Faker\Generator as Faker;

$factory->define(blogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'content' => $faker->paragraph()
    ];
});

$factory->state(App\blogPost::class,'new-title',function (Faker $faker){
    return [
        'title' => 'my title',
        'content' => 'content too loong'
    ];
});
