<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'phone', 'email'];

    public function message()
    {
        return $this->belongsTo('App\Message');
    }
}
