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
          DB::table('users')->insert([
         'name' => 'root',
         'email' => 'root',
         'created_at' => date('Y-m-d h:i:s'),
         'updated_at' => date('Y-m-d h:i:s'),
      ]);
    }
}
