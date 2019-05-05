<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use App\Course;

class GeneralController extends Controller
{
  public function trainer_singolo($slug)
  {
    $trainers = Trainer::where('slug',$slug)->with(['courses'])->get()->toArray();
    $courses = Course::all();

    if (empty($trainers)) {
      return abort(404);
    }
    return view('trainers.trainer_singolo', compact('trainers','courses'));
  }
}
