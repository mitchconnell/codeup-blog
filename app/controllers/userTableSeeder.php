<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = new User();
		$user->email = "mitchconnell@hotmail.com"
		$user->password = Hash::make('let_mitchell_in')
		$user->save();
	}
}