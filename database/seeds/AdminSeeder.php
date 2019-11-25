<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'email' => 'justas@gmail.com',
            'name' => 'justas',
            'email_verified_at' => now(),
            'password' => Hash::make('justas123'),
            'remember_token' => Str::random(12),
            'role_id' => 1,
        ]);
    }
}
