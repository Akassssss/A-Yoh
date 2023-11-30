<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'akas',
        //     'email'=> 'email@gmail.com',
        //     'password' => Hash::make('123')
        // ]);

        $userdata = [ 
            [
                'name' => 'User',
                'email'=> 'user@gmail.com',
                'role' => 'user',
                'password' => Hash::make('123')
            ],
            [
                'name' => 'Admin',
                'email'=> 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('123')
            ],

        ];

        foreach($userdata as $key => $val){
            User::create($val);

        }
    }
}
