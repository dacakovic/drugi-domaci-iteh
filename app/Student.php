<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "student";
    public $timestamps = false;

    public function naplateStudenta()
    {
        return $this->hasMany('App\Naplata', 'student_id', 'id');
    }
    public function zaduzivanjaStudenta()
    {
        return $this->hasMany('App\Zaduzivanje', 'student_id', 'id');
    }
}
