<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $admin = [

            ['name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$m7ZVDmTVf2a1hrJ9R/D4k.l3ZYGwL8BXCloJa/EaEFRcgeKOzc0K6', 'is_admin' => 1, 'email_verified_at' => '2022-07-28 22:54:55']
        ];
        User::insert($admin);
    }
}
