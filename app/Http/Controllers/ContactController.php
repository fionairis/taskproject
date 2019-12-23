<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    public function send(){
        return view('user.contact');
    }
    public function save(Request $request){
        
        $this->validate($request,['first_name'=>'required','last_name'=>'required','email'=>'required','subject'=>'required','message'=>'required']);
        $contact=new Contact(); 
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
         echo('Data inserted succesfully');
         return redirect ('contact');
         //print_r($request->input());
}

}