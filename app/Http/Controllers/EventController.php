<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    public function create(){
        return view('admin.post.event');
    }

    public function save(Request $request){
        $this->validate($request,['title'=>'required','time_from'=>'required','time_upto'=>'required','location'=>'required','date'=>'required']);
    $event=new Event(); 
    $event->title = $request->title;
    $event->time_from = $request->time_from;
    $event->time_upto = $request->time_upto;
    $event->location = $request->location;
    $event->date = $request->date;
    $event->save();
    // echo('Data inserted succesfully');
    print_r($request->input());
    //return redirect ('event');
    }
}
