<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $types = array(
               'Country',
               'City',
               'Zip',
               'Address',
               'Email',
               'Tel',
               'Company',
               'Firstname',
               'Lastname',
         );
         foreach ($types as $type) {
               DB::table('types')->insert([
                'type' => $type,
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ]);
         }
    }
}
