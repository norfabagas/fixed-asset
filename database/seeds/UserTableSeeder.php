<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('katakunci'),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
