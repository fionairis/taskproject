<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class AdminContact extends Controller
{
    public function show(){
        $contact = Contact::all();
        return view('admin.admincontact')->with('contacts',$contact);
    }
    public function delete($id){
        $contact =Contact::where('id',$id)->delete();
        // session()->flash('message','Successfully deleted');
         return redirect()->back();
    }
}
