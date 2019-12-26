<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryCreateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        // yo get() jasto haru aafai banaunu parxa ramro ko lagi chai
     //repository interface haru herna parxa
        $categories = Category::all();
        return view('admin.category.category',compact('categories'));

    }
    public function create(){
        return view('admin.category.create');
    }

    public function save( Request $request){
       // dd($request);
        $this->validate($request,['title'=>'required','url'=>'required','details'=>'required']);
        $category=new Category();
        $category->title = $request->title;
        $category->url = $request->url;
        $category->details = $request->details;
       $success = $category->save();

       if($success){
        return redirect('admin/category-index')->with('success','Successfully Added new category');

       }
       return back()->with("error","please enter the data");


    }
    public function edit($id){
        // $inputs=Input::all();
        $category = Category::find($id);
        return view('admin.category.change',compact('category'));

    }
    // update vayena
//yesari validation haru garna parxa
//    public function update(CategoryCreateRequestgor $request,$id){

    public function update(Request $request,$id){
    $this->validate($request,['title'=>'required','url'=>'required','details'=>'required']);
    $category = Category::find($id);
    $category->title = $request->title;
    $category->url = $request->url;
    $category->details = $request->details;
   $success = $category->save();
   if($success){
       return redirect('admin/category-index')->with('success','post updated');
   }
   return redirect('admin/category-index')->with('error','Errors....');

}
public function delete($id){
    $category = Category::where('id',$id)->delete();
        //session()->flash('message','Successfully deleted');
        return redirect()->back();

}
}
