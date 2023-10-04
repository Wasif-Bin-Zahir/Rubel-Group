<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

// models...
use Modules\Cms\Entities\CommitteeCategory;

$factory->define(CommitteeCategory::class, function (Faker $faker) {
    return [
        'title' => \Illuminate\Support\Str::title($faker->word),
		'description' => $faker->paragraph,
    ];
});
