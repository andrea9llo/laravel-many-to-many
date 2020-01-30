<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\UserInfo;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
      'phone' => $faker -> phoneNumber,
      'birthYear'=> rand(1950,2018)
    ];
});
