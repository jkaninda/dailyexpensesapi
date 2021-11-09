<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach($this->data() as $data)
        User::create($data);

    }

    private function data(){
        return[
            [
                'name'=>'Josh Mukandila',
                'username'=>'josh',
                'email'=>'webmaster@jkantech.com',
                'password'=>Hash::make('Josh@2002'),
                'role'=>'admin',

            ],

            [
                'name'=>'Valery Sakidi',
                'username'=>'valery',
                'email'=>'webmaster2@jkantech.com',
                'password'=>Hash::make('Valery@2020'),
                'role'=>'admin',

            ],
            [
                'name'=>'Grace',
                'username'=>'grace',
                'email'=>'webmaster3@jkantech.com',
                'password'=>Hash::make('password'),
                'role'=>'manager',

            ],

            [
                'name'=>'Jonas Kaninda',
                'username'=>'jonas',
                'email'=>'jonas@jkantech.com',
                'password'=>Hash::make('Root@2020'),
                'role'=>'admin',

            ]

            

        ];
    }
}
