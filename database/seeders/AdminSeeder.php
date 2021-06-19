<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'admin',
            'email' => 'admin@gmail.com',
            'role'  => 'admin',
            'password' => Hash::make('1234')
        ]);
    }
}
