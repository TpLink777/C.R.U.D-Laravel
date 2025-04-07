<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'stiven';
        $user->email = 'stivengomezmazo7@gmail.com';
        $user->password = bcrypt('123456789');
        $user->save();

    }
}
