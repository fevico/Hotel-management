<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryControler extends Controller
{
    //
    public function AllCetegory(){
        $category = Category::latest()->get();
        return view('backend.category.all_category', compact('category'));
    }

    public function AddCetegory(){
        return view('backend.category.add_category');
    }

    public function CetegoryStore(Request $request){
        Category::insert([
            'category_name' => $request->category_name,
        ]);
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
             ); 
         return redirect()->route('all-category')->with($notification); 
    }
}
