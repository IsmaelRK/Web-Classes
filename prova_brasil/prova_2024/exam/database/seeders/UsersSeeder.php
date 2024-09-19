<?php

namespace Database\Seeders;

use App\Models\AppUsers;
use App\Models\users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{

    public function run(): void
    {
        AppUsers::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'password' => '123'
        ]);

        AppUsers::create([
            'name' => 'Jane Smith',
            'email' => 'jane.smith@example.com',
            'password' => '1234'
        ]);
    }
}
