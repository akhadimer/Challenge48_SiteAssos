<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Asso;
use Faker\Generator as Faker;

$factory->define(Asso::class, function (Faker $faker) {
    return [
        'titre' => $faker->word,
        'description' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'lieu' => $faker->streetAddress,
        'url_site' => 'http://google.com',
        'url_image' => 'http://placeimg.com/640/480/animals'
    ];
});
