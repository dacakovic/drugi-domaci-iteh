<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zaduzivanje extends Model
{
    protected $table = "zaduzivanje";
    public $timestamps = false;

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'id');
    }
}
