<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'phone', 'email', 'subject_id'];

    public function message()
    {
        return $this->belongsTo('App\Message');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
