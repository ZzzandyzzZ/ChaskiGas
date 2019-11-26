<?php

use Illuminate\Database\Seeder;
use ChaskiGas\User;
use ChaskiGas\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_user=Role::where('name','superAdmin')->first();

    	$user = new User();
        $user->name="superAdmin";
    	$user->email="superAdmin@gmail.com";
    	$user->username="superAdmin";
    	$user->password=bcrypt('123');
    	$user->slug="superAdmin";
    	$user->role()->associate($role_user)->save();
    	$user->save();
    }
}
