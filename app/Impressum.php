<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impressum extends Model
{
      protected $fillable = [
            'Web_id',
            'Country',
            'Country_id',
            'City',
            'City_id',
            'Zip',
            'Zip_id',
            'Address',
            'Address_id',
            'Email',
            'Email_id',
            'Tel',
            'Tel_id',
            'Company',
            'Company_id',
            'Firstname',
            'Firstname_id',
            'Lastname',
            'Lastname_id',
      ];

      public static function updateOrCreate(array $attributes, array $values = array())
      {
            $instance = static::firstOrNew($attributes);

            $instance->fill($values)->save();

            return $instance;
      }
}
