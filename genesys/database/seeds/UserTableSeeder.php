<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array("name"=>"kristianto","email"=>"kristianto@gmail.com","username"=>"kristianto","password"=>"kristianto987")
        );

        foreach ($data as $raw_data) {
            $raw_data['password'] = bcrypt($raw_data['password']);

            DB::table('users')->insert($raw_data);
        }

    }
}
