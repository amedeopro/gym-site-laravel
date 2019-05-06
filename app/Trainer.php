<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name','surname','description','image'];



    public function courses(){
      return $this->belongsToMany(Course::class)->withTimestamps();
    }

    public function hours(){
      return $this->belongsToMany(Hour::class)->withTimestamps();
    }

    public function days(){
      return $this->belongsToMany(Day::class)->withTimestamps();
    }

}
