<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monster extends Model
{
    public function calcMOD($stat)
    {
      return floor(($stat - 10) /2) ;
    }
}
