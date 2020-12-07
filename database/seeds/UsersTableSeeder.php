<?php

use Illuminate\Database\Seeder;
// Exporto Instancia del modelo User
use App\Entities\Admin\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Creamos usuario Root por Defecto
        $root = new User();
        $root->email = 'root@ticket.com';
        $root->username = 'root';
        $root->firstname = 'Root Jr';
        $root->password = 'Password';
        $root->created_by = 1;
        $root->updated_by = 1;
        $root->save();

        
        // Creamos usuario Root por Defecto
        $user = new User();
        $user->email = 'persona@sincorreo.com';
        $user->username = 'cjimen';
        $user->firstname = 'Carlos Alberto';
        $user->password = bcrypt('Passw1234');
        $user->created_by = $root->id;
        $user->updated_by = 1;
        $user->save();
    }
}
