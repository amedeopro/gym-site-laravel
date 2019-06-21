<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informations;
use App\Course;
use App\Date;
use App\Day;
use App\Hour;
use App\Trainer;
use App\Schedule;
use App\Category;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailinfo;

class ContactController extends Controller
{

  public function richiesta_orari(Request $request){
    $coursesnolm = Course::all()->where('lesmills','0');
    $courseslm = Course::all()->where('lesmills','1');
    $courses = Course::all();
    $dates = Date::wherenotnull('id')->with(['courses'])->get()->toArray();
    $days = Day::all();
    $hours = Hour::all();
    $categories = Category::all();

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


    $data = $request->all();

    $newInfo = new Informations();

    $newInfo->name = $data['namesurname'];
    $newInfo->email = $data['email'];
    $newInfo->phone = $data['phone'];
    $newInfo->schedule = $data['schedule'];
    $newInfo->privacy = $data['privacy'];

    $newInfo->save();

    $message = "Grazie per averci contattati, riceverete quanto prima gli orari richiesti.";

    Mail::to('amedeopro@me.com')->send(new Mailinfo($newInfo));

    return view('corsi_fitness.index',compact('message','coursesnolm','courseslm','dates','courses','days','hours','schedulesLunedi','schedulesMartedi','schedulesMercoledi','schedulesGiovedi','schedulesVenerdi','schedulesSabato','schedulesLunedib','schedulesMartedib','schedulesMercoledib','schedulesGiovedib','schedulesVenerdib','schedulesSabatob', 'categories'));
  }

}
