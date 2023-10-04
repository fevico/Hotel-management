<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    // 
    public function UpdateAbout(){
        $id = About::find(1);
        return view('backend.about.edit_about', compact('id'));
    }

    public function StoreAbout(Request $request){
        $edit_id = $request->id;

        if($request->file('image')){
            $image = $request->file('image');
             $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(284,400)->save('upload/About/'.$name_gen);
             $save_url = 'upload/About/'.$name_gen;

            About::findOrfail($edit_id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'About Updated With Image Successfully',
                'alert-type' => 'success'
                 ); 
            return redirect()->back()->with($notification);
        }else{
            About::findOrfail($edit_id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => 'About Updated Successfully',
                'alert-type' => 'success'
                 ); 
            return redirect()->back()->with($notification);
        }
    }
}
