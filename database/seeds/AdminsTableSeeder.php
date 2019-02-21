<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'nhai',
            'email' => 'nhai@gmail.com',
            'Role' => '0',
            'password' => bcrypt('123456'),
        ]);
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'Role' => '0',
            'password' => bcrypt('123456')
        ]);
    }
}
