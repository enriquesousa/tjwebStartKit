<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
            
        //     [
        //         'name' => 'Admin',
        //         'username' => 'admin',
        //         'email' => 'admin@gmail.com',
        //         'password' => Hash::make('admin'),
        //         'role' => 'admin',
        //         'status' => '1',  
        //     ],

        //     [

        //     ],

        //     [
                
        //     ],

        // ]);

        // Admin
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('111'),
        ]);

        // User
        User::create([
            'name' => 'User',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('111'),
        ]);
    }
}
