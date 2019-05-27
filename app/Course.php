<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $fillable = ['name_course','lesmills','description_course','logo_course','slug','bg_image'];

  public function trainers(){
    return $this->belongsToMany(Trainer::class)->withTimestamps();
  }

  // public function dates(){
  //   return $this->belongsToMany(Date::class)->withTimestamps();
  // }

  public function days(){
    return $this->belongsToMany(Day::class)->withTimestamps();
  }

  public function hours(){
    return $this->belongsToMany(hour::class)->withTimestamps();
  }

  public function categories(){
    return $this->belongsToMany(Category::class)->withTimestamps();
  }
}
