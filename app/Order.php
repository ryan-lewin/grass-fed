<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function restaurant()
    {
        return $this->hasOne('App\User');
    }

    public function customer()
    {
        return $this->hasOne('App\User');
    }
}
