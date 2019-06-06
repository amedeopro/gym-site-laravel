<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use App\Course;
use App\Post;
use App\Category;

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

  public function visualizza_post_singolo($slug)
  {
      $posts = Post::where('slug',$slug)->get();
      return view('posts.visualizza_singolo_post',compact('posts'));
  }

  public function innercategory($slug){
    $categories = Category::where('slug',$slug)->with(['courses'])->get()->toArray();

    $courses = Course::all();

    return view('innercategory',compact('categories','courses'));
  }
}
