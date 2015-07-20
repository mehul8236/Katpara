<?php namespace Components\Customer\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Components\Customer\Models\User;
use Components\Customer\Models\Role;

class CustomerDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('role_user')->delete();
		\DB::table('permissions')->delete();
		\DB::table('role_user')->delete();
		\DB::table('roles')->delete();
		\DB::table('users')->delete();

		$user = new User;
		$user->username = 'mehul8236';
		$user->firstname = 'Mehul';
		$user->lastname = 'Katpara';
		$user->password = \Hash::make('mehul8236');
		$user->email = 'mehulkatpara24@yahoo.in';
		$user->security = "normal";
		$user->save();

		$admin = new Role;
		$admin->name = 'Admin';
		$admin->display_name = 'Administrator';
		$admin->description  = 'System Administrator';
		$admin->save();

		$user->attachRole($admin);
	}

}