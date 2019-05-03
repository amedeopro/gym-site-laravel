<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Date;
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
       $course = Course::all();
       $date = Date::wherenotnull('id')->with(['courses'])->get()->toArray();

    // dd(
    //   Date::wherenotnull('id')
    //   ->with(['courses'])
    //   ->get()
    //   ->toArray()
    // )   ;

       return view('corsi_fitness.index',compact('coursesnolm','courseslm','date','course'));
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
        return view('courses.create', compact('dates'));
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

        $newCourse->dates()->attach($data['date_id']);

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
