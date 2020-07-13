<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
    	 DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'phone_number' => '01729807117',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'user2',
            'email' => 'user2@email.com',
            'phone_number' => '01729807118',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'user3',
            'email' => 'user3@email.com',
            'phone_number' => '01729807119',
            'password' => bcrypt('password'),
        ]);
        //factory(\App\Models\User::class, 10)->create();
    }
}
