<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naplata extends Model
{
    protected $table = "naplata";
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'id');
    }
}
