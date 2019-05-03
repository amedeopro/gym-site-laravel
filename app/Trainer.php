<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ['name','surname','description','image'];



    public function courses(){
      return $this->belongsToMany(Course::class)->withTimestamps();
    }

}
