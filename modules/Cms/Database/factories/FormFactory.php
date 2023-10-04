<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

// models...
use Modules\Cms\Entities\Form;

$factory->define(Form::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
		'data' => $faker->paragraph,
		'agent_info' => $faker->sentence,
		'type' => $faker->paragraph,
    ];
});
