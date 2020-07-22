<?php 

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->delete();
        
        $users = array(
            array(
                'name' => 'mrkwon@ya.ru',
                'password' => Hash::make('123123'),
                'email' => 'mrkwon@ya.ru',
                'remember_token' => '1'
            )
        );

        DB::table('users')->insert($users);
    }
}