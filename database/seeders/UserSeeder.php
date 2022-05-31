<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'username'=>'admin',
            'nickname'=>'mimin',
            'password'=>Hash::make('admin')
        ]);

        User::isnert([
            'username'=>'droot',
            'nickname'=>'dlook',
            'password'=>Hash::make('droot')
        ]);
    }
}
