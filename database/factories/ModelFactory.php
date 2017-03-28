<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(Teach\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});



$factory->define(Teach\Entities\Ticket::class, function(Faker\Generator $faker){

	return [
	'title'=>$faker->sentence(),
	'status' => $faker->randomElement(['open', 'open', 'close']),
	'user_id' => rand(1,21)
	];


});


$factory->define(Teach\Entities\TicketVote::class, function(Faker\Generator $faker){

	return [
	'user_id'=>rand(1,21),
	'ticket_id' => rand(1,20),
	];


});


$factory->define(Teach\Entities\TicketComment::class, function(Faker\Generator $faker){

	return [
	'user_id'=>rand(1,21),
	'ticket_id' => rand(1,20),
	'comment' => $faker->paragraph(),
	'link' => $faker->randomElement(['', '', $faker->url])
	];


});