<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProject extends Model
{
    public function projects(){
      return $this->belongsTo('App\Project')
    }
}
