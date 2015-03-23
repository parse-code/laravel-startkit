<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // initial admin user
        $user        = new User();
        $user->name  = 'admin';
        $user->email = 'admin@me.com';
        $user->password  = 'admin';


        // initial admin role and permission
    }

}
