<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeacherStatus extends Model
{
    protected $table="teacherstatus";
    protected $fillable=['statusname'];
    public $timestamps=false;

    //
}
