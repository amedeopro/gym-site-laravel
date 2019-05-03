<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{

  protected $fillable = ['day','hour'];

  public function courses(){
    return $this->belongsToMany(Course::class)->withTimestamps();
  }
}
