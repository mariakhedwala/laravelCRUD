<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    // protected $primaryKey = 'site_id';

    public function sites()
    {
        return $this->belongsTo('App\Sites');
    }
}
