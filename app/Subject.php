<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['description'];

    public $timestamps = false;

    public function contact()
    {
        return $this->hasOne('App\Contact');
    }
}
