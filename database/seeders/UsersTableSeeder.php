<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '山田　太郎',
            'email' => 'a123@sample.com',
            'password' => bcrypt('password'),
        ];
        DB::table('users')->insert($param);
    }
}
