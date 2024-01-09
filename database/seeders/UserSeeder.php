<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create(
            [
                'name' => 'Shafiq',
                'email' => 'xxshafiqhaikalxx@gmail.com',
                'password' => bcrypt('games100'),
            ]
        );
        $admin->assignRole('admin');

        $staff = User::create(
            [
                'name' => 'haikal',
                'email' => 'haikals600@gmail.com',
                'password' => bcrypt('games100'),
            ]
        );
        $staff->assignRole('staff');
    }
}
