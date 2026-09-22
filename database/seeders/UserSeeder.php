<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //admin role
        $admin = User::create([
            'name'=>'Katabaire',
            'email'=>'katabaire@gmail.com',
            'password'=>Hash::make('password'),
        ]);
        $admin->assignRole('admin');

        //user role
        $user = User::create([
            'name'=>'John',
            'email'=>'john@gmail.com',
            'password'=>Hash::make('password'),
        ]);
        $user->assignRole('user');
    }
}
