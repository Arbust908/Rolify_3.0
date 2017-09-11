<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
	public function value()
    {
    	return $this->hasMany('App\Value');
    }

	public function categoria()
	{
		return $this->belongsTo('App\Categoria');
	}
}
