<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
                'role_name' => 'admin',
                'role_code' => 1,
        ]);

        Role::create([
                'role_name' => 'test',
                'role_code' => 2,
        ]);
    }
}
