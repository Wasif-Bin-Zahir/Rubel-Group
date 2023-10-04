<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

// models...
use Modules\Cms\Entities\CommitteeMember;

$factory->define(CommitteeMember::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
		'designation' => $faker->word,
		'bio' => $faker->paragraph,
		'email' => $faker->safeEmail,
		'phone' => $faker->phoneNumber,
		'mobile' => $faker->phoneNumber,
		'fax' => $faker->phoneNumber,
		'facebook' => $faker->url,
		'twitter' => $faker->url,
		'linkedin' => $faker->url,
		'committee_category_id' => $faker->numberBetween(1, 4),
    ];
});
