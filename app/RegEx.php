<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegEx extends Model
{
      protected $fillable = [
            'RegEx',
            'Type',
            'created_at',
            'updated_at',
      ];
}
