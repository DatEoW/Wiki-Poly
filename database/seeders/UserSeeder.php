<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [   
                'name' => 'Ngọc Nghi',
                'email' => 'vonghi1610@gmail.com',
                'password' => Hash::make('Wikipoly@'), 
                'role' => 1,
                'created_at' => Now(), 
                'updated_at' => Now()
            ],
        ]);
    }
}
