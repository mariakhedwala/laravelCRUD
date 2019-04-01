<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    public function detail()
    {
        return $this->hasOne('App\Detail');
    }
}
