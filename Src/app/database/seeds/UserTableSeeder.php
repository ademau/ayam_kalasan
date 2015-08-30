// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Ade Maulana',
			'username' => 'tidakadanama',
			'email'    => 'blankheroes@yahoo.com',
			'password' => Hash::make('luarbiasa123'),
		));
	

	}

}

