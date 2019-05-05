<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hour extends Model
{
  public function days(){
    return $this->belongsToMany(Day::class)->withTimestamps();
  }

  public function courses(){
    return $this->belongsToMany(Course::class)->withTimestamps();
  }
}
