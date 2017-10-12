<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Agency;
use App\Agent;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create new User with name - Admin
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('123456');
        /**Get the ID of ROLE - Admin*/
        $role_admin = Role::where('name', 'Admin')->first();
        $admin->role_id = $role_admin->id;
        $admin->save();


        /**
         * Create new User with name - Agency
         */

        $agent = new User();
        $agent->name = 'Agent';
        $agent->email = 'agent@agent.com';
        $agent->password = bcrypt('123456');
        $role_agent = Role::where('name', 'Agent')->first();
        $agent->role_id = $role_agent->id;
        $agent->save();

        $agents = new Agent();
        $user_id = User::where('email', $agent->email)->first();
        $agents->user_id = $user_id->id;
        $agents->save();

    }
}
