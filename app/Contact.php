<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	public $guarded = [];
	
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
}
