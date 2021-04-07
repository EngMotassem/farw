<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class school extends Model
{
    //

    public function user()
    {
        return $this->belongs(User::class);
    }
}
