<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //

    protected $fillable=['userid','schoolname','mangername', 'mangerphone',
        'faniname','faniphone'

    ,'edariname','edariphone',
        'tolabiname','tolabiiphone',
        'schooladdress','schoolphone',
        'wesiteurl','gender','notes'
    ];

    public function user()
    {
        return $this->belongs(User::class);
    }
}
