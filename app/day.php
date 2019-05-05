<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class day extends Model
{
  public function hours(){
    return $this->belongsToMany(Hour::class)->withTimestamps();
  }

  public function courses(){
    return $this->belongsToMany(Course::class)->withTimestamps();
  }
}
