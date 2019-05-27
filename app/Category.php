<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name','category_img'];

    public function courses(){
      return $this->belongsToMany(Course::class)->withTimestamps();
    }
}
