<?php

use Illuminate\Database\Seeder;
use App\Model\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Create role seeder
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
		$admin = new Role();
		$admin->name         = 'admin';
		$admin->display_name = 'Admin in Web'; // optional
		$admin->description  = 'User is allowed to manage anythings in website'; // optional
		$admin->save();

		$user = new Role();
		$user->name         = 'user2';
		$user->display_name = 'User Administrator'; // optional
		$user->description  = 'User2 is allowed to manage something . Which will allow for Admin'; // optional
		$user->save();

		$user = new Role();
		$user->name         = 'user';
		$user->display_name = 'User Nomarl'; // optional
		$user->description  = 'Not use the Role'; // optional
		$user->save();
    }
}
