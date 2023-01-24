<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'owner1test@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/01/24 11:11:11'
            ],
            [
                'name' => 'test2',
                'email' => 'owner2test@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/01/24 11:11:11'
            ],
            [
                'name' => 'test3',
                'email' => 'owner3test@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => '2023/01/24 11:11:11'
            ],
        ]);
    }
}
