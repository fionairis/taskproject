<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
class CompaniesController extends Controller
{
    public function form(){
        return view('admin.company');
    }
    public function save(Request $request){
        
    $this->validate($request,['name'=>'required','address'=>'required','file'=>'required']);
    $company=new Company(); 
    $company->name = $request->name;
    $company->address = $request->address;
    $company->file = $request->file;
    $company->save();
    echo('Data inserted succesfully');
    return redirect ('index');
print_r($req->input());


    }
public function show(){
    $company = Company::all();
    return view('index')->with('companies',$company);
}

public function delete($id){
 $company =Company::where('id',$id)->delete();
    // session()->flash('message','Successfully deleted');
     return redirect()->back();
    //print_r($req->input());

}
public function edit($id){
    // $inputs=Input::all();
    $company = Company::find($id);
   return view('edit',compact('company'));
  
   
}
public function update(Request $request,$id){
    $this->validate($request,['name'=>'required','address'=>'required','file'=>'required']);
    $company=new Company(); 
    $company->name = $request->name;
    $company->address = $request->address;
    $company->file = $request->file;
   echo $company->save();
 return redirect('show')->with('success','post updated');

}

}
