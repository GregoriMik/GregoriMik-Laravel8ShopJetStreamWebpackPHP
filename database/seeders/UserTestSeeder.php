<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@admin.pl",
            'utype'=>"ADM",
            'password' => "admin",
        ]);
        DB::table('users')->insert([
            'name' => "User",
            'email' => "user@user.pl",
            'utype'=>"USR",
            'password' => "user",
        ]);
    }
}
