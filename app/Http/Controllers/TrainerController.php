<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;
use App\Course;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function trainers_admin()
     {
         $trainers = Trainer::all();

         return view('trainers.visualizza',compact('trainers'));
     }

    public function index()
    {
        $trainers = Trainer::all();
        $courses = Course::all();

        return view('trainers.index',compact('trainers','courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $courses = Course::all();
      return view('trainers.create',compact('courses'));
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

        $name = $data['name'];
        $fullname = $name.$data['surname'];


        $newTrainer = New Trainer();

        $newTrainer->name = $data['name'];
        $newTrainer->surname = $data['surname'];
        $newTrainer->description = $data['description'];
        $newTrainer->slug = Str::slug($fullname);

        if(!empty($data['image'])){
          $image = Storage::disk('public')->put('trainers', $data['image']);
          $newTrainer->image = $image;
        }

        $newTrainer->save();


        $newTrainer->courses()->attach($data['course_id']);


        return redirect()->route('trainers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $trainer = Trainer::find($id);
      $courses = Course::all();

      if (empty($trainer)) {
        return abort(404);
      }

      return view('trainers.show', compact('trainer','courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainer = Trainer::find($id);
        $courses = Course::all();
        // $courses = Course::with('trainers')->get();


        return view('trainers.edit', compact('trainer','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
      $data = $request->all();

      if(!empty($data['image'])){
        $image = Storage::disk('public')->put('trainers', $data['image']);
        $data['image'] = $image;
      }


      $trainer->update($data);

      $trainer->courses()->sync($data['course_id']);

      return redirect()->route('trainers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainer = Trainer::find($id);
        $trainer->delete();
        return redirect()->back();
    }
}
