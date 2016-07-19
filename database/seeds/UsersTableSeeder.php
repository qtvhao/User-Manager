<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$faker = Faker\Factory::create();
		$faker->addProvider(new Faker\Provider\Internet($faker));
		$faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));

		for ($i = 0; $i < 20; $i++) {
			$user = new App\User;
			$user->name = $faker->name;
			$user->email = $faker->email;
			$user->password = $faker->password;
			$user->username = $faker->userName;
			$user->phone = $faker->phoneNumber;
			$user->save();
		}
	}
}
