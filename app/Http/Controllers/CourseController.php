<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Date;
use App\Day;
use App\Hour;
use App\Trainer;
use App\Schedule;
use App\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function visualizza_corsi(){
       $coursesnolm = Course::all()->where('lesmills','0');
       $courseslm = Course::all()->where('lesmills','1');
       $courses = Course::all();
       $dates = Date::wherenotnull('id')->with(['courses'])->get()->toArray();
       $days = Day::all();
       $hours = Hour::all();

       //fitness a
       $schedulesLunedi = Schedule::all()->where('day','Lunedì')->where('room','fitness a');
       $schedulesMartedi = Schedule::all()->where('day','Martedì')->where('room','fitness a');
       $schedulesMercoledi = Schedule::all()->where('day','Mercoledì')->where('room','fitness a');
       $schedulesGiovedi = Schedule::all()->where('day','Giovedì')->where('room','fitness a');
       $schedulesVenerdi = Schedule::all()->where('day','Venerdì')->where('room','fitness a');
       $schedulesSabato = Schedule::all()->where('day','Sabato')->where('room','fitness a');

       //fitness b
       $schedulesLunedib = Schedule::all()->where('day','Lunedì')->where('room','fitness b');
       $schedulesMartedib = Schedule::all()->where('day','Martedì')->where('room','fitness b');
       $schedulesMercoledib = Schedule::all()->where('day','Mercoledì')->where('room','fitness b');
       $schedulesGiovedib = Schedule::all()->where('day','Giovedì')->where('room','fitness b');
       $schedulesVenerdib = Schedule::all()->where('day','Venerdì')->where('room','fitness b');
       $schedulesSabatob = Schedule::all()->where('day','Sabato')->where('room','fitness b');

       return view('corsi_fitness.index',compact('coursesnolm','courseslm','dates','courses','days','hours','schedulesLunedi','schedulesMartedi','schedulesMercoledi','schedulesGiovedi','schedulesVenerdi','schedulesSabato','schedulesLunedib','schedulesMartedib','schedulesMercoledib','schedulesGiovedib','schedulesVenerdib','schedulesSabatob'));
     }

    public function index()
    {
        $courses = Course::all();
        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dates = Date::all();
        // $days = Day::wherenotnull('id')->with(['hours'])->get()->toArray();
        $days = Day::all();
        $hours = Hour::all();
        $trainers = Trainer::all();
        $categories = Category::all();
        return view('courses.create', compact('dates','days','hours','trainers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // if (!empty($data['logo_course'])){
        $image = Storage::disk('public')->put('courses', $data['logo_course']);
        $bgimage = Storage::disk('public')->put('courses/background', $data['bg_image']);
        // }

        $newCourse = New Course();

        $newCourse->name_course = $data['name_course'];
        $newCourse->lesmills = $data['lesmills'];
        $newCourse->description_course = $data['description_course'];
        $newCourse->logo_course = $image;
        $newCourse->bg_image = $bgimage;
        $newCourse->slug = Str::slug($data['name_course']);

        $newCourse->save();

        //$newCourse->day()->attach($data['date_id']);

         // if (!empty($data['day_id']) & !empty($data['hour_id'])) {
          $newCourse->days()->attach($data['day_id']);
          $newCourse->hours()->attach($data['hour_id']);
          $newCourse->trainers()->attach($data['trainer_id']);
         // }


        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function corso_singolo($slug)
    {
      $courses = Course::where('slug',$slug)->with(['trainers'])->get()->toArray();
      $trainers = Trainer::all();

      return view('courses.corso_singolo', compact('trainers','courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $dates = Date::all();
        return view('courses.edit', compact('course','dates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $request->all();

        $image = Storage::disk('public')->put('courses', $data['logo_course']);
        $bgimage = Storage::disk('public')->put('courses/background', $data['bg_image']);

        $data['logo_course'] = $image;
        $data['bg_image'] = $bgimage;

        $course->update($data);

        $course->dates()->sync($data['date_id']);

        return redirect()->route('courses.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $course = Course::find($id);
      $course->delete();
      return redirect()->back();
    }
}
