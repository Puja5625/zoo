<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
           $users = [
            [
              'name' => 'Myat',
              'email' => 'myat@gmail.com',
              'password' => '123456',
              'role' => 'admin',
            ],
            [
              'name' => 'Ko Hla',  
              'email' => 'user@gmail.com',
              'password' => '123456',
              'role' => 'user',
            ],
             [
              'name' => 'Mg Mya',
              'email' => 'client@gmail.com',
              'password' => '123456',
              'role' => 'user',
            ]
          ];

          foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'password' => Hash::make($user['password']),
               'role' => $user['role'],
             ]);
           }
    }
}
