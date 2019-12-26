<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Item;
use Image;

class ItemController extends Controller
{
    /*..
     * geting alll
     *
     * @return ..
     * */
    public function index()
    {
        $items = Item::all();
        return view('admin.items.index', compact('items'));

    }

    /*
     *
     * */
    public function create()
    {
        $data['categories'] = Category::get();
        return view('admin.items.create', $data);
    }

    /*
     *
     * */
    public function save(Request $request)
    {
        $this->validate($request, ['category_id' => 'required',
            'name' => 'required', 'description' => 'required', 'price' => 'required',
            'image' => 'nullable']);
        $item = new Item();
        $item->category_id = $request->category_id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->image = $request->image;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save(storage_path('uploads/' . $filename));
            $item->image = $filename;
            $success = $item->save();
        }
        $success = $item->save();

        if ($success) {
            return redirect('item-index', 'success', "successfully created");
        }
        return back()->with('error', "unsuccesful");

    }

    public function edit($id)
    {
        $data['item'] = Item::find($id);
        $data['categories'] = Category::get();

        return view('admin.items.edit', $data);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['category_id' => 'required',
            'name' => 'required', 'description' => 'required', 'price' => 'required',
            'image' => 'nullable']);
        $item = Item::find($id);
        $data = $request->all();
        $data['category_id'] = $request->category_id;
        $data['name'] = $request->name;
        $data['description'] = $request->description;
        if (isset($request->image)) {
            $data['image'] = $request->image;
        }
        $data['price'] = $request->price;
        $success = $item->update($data);

        if ($success) {
            return redirect()->route('item-index')->with( 'success', "successfully created");
        }
        return back()->with('error', "unsuccesful");
    }

    public function delete($id)
    {
        $company = Item::where('id', $id)->delete();
        // session()->flash('message','Successfully deleted');
        return redirect()->back();

    }
}

