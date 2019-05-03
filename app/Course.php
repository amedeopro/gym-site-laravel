<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = ['name_course','lesmills','description_course','logo_course','slug','bg_image'];

  public function trainers(){
    return $this->belongsToMany(Trainer::class)->withTimestamps();
  }
}
