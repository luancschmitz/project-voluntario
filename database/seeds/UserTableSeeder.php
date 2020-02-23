<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Joao', 'email' => 'joao@treinaweb.com', 'password' => bcrypt('senha123')],
            ['name' => 'Juca', 'email' => 'juca@treinaweb.com', 'password' => bcrypt('senha321')],
        ];
        
        foreach($users as $user)
        {
            App\User::create($user)->save();
        }
    }
}
