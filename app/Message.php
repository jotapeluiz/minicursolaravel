<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message'];

    public function contact()
    {
        return $this->hasOne('App\Contact');
    }
}
