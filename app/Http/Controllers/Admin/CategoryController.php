<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.category',compact('categories'));
    }
    public function create(){
        return view('admin.category.create');
    }
    
    public function save( Request $request){
        $this->validate($request,['title'=>'required','url'=>'required','details'=>'required']);
        $category=new Category(); 
        $category->title = $request->title;
        $category->url = $request->url;
        $category->details = $request->details;
       $success = $category->save();

       if($success){
        return redirect('admin/category-index')->with('message','Successfully Added new category');
       }
       return back()->with("message","please enter the data");

    
    }
   
}
