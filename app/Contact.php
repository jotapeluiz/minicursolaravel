<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use SoftDeletes;

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
