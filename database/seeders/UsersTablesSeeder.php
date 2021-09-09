<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use Carbon\Carbon;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '키무진용',
            'email' => 'kim@recipe_test.com',
            'password' => Hash::make('123456'),
            'sex' => 1,
            'auth' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
