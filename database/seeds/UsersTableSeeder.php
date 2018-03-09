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
        factory(\App\User::class)->create([
            'role_id' => 1,
            'name' => 'hong duy',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123'),
        ]);

        factory(\App\User::class, 100)->create();
    }
}
