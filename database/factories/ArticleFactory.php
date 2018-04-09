<?php

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title'     => $faker->sentence,
        'category'  => $faker->word,
        'author'    => $faker->name,
        'image1'    => $faker->image($dir = 'public/img/artikel', $width = 640, $height = 480, '',false),
        'image2'    => $faker->image($dir = 'public/img/artikel', $width = 640, $height = 480, '',false),
        'image3'    => $faker->image($dir = 'public/img/artikel', $width = 640, $height = 480, '',false),
        'body'      => $faker->text,
        'quote'     => $faker->sentence,
        'place'     => $faker->city
    ];
});
