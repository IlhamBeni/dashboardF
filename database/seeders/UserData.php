<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin2',
                'email' => 'Admin2@gmail.com',
                'password' => bcrypt('Admin123!!'),
                'remember_token' => Str::random(60),
            ]
        ];
        foreach($user as $key =>$value){
            User::create($value);
        }
    }
}
