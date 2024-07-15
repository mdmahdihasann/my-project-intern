<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $admin = Role::where('slug','admin')->first();
        User::create([
            'role_id'=> $admin->id,
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make(12345678),
        ]);

        $user = Role::where('slug','user')->first();
        User::create([
            'role_id'=> $user->id,
            'name'=>'User',
            'email'=>'user@gmail.com',
            'password'=>Hash::make(12345678),
        ]);
    }
}
