<?php

namespace App\Http\Controllers\BAckend;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use App\Models\Slider;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{ 
    //
    public function AdminAddSlider(){
        return view('backend.slider.admin_add_slider');
    }

    public function AdminAllSlider(){
        $slider = Slider::latest()->get();
        return view('backend.slider.all_slider', compact('slider'));
    }

    public function SliderStore(Request $request){

            if($request->file('slider_image')){
             $image = $request->file('slider_image');
             $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1920,850)->save('upload/slider/'.$name_gen);
             $save_url = 'upload/slider/'.$name_gen;

             Slider::insert([
            'title'=> $request->title,
            'short_title'=> $request->short_title,
            'slider_image'=> $save_url,
             ]);
    }
    $notification = array(
        'message' => 'Slider Updated Successfully',
        'alert-type' => 'success'
         ); 
    return redirect()->route('admin-all-slider')->with($notification);
} 

public function SliderEdit($id){
    $slider = Slider::findOrFail($id);
    return view('backend.slider.edit_slider', compact('slider'));
}

public function SliderUpdate(Request $request){
  
    $slider_id = $request->id;

    if($request->file('slider_image')){
        $image = $request->file('slider_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
       Image::make($image)->resize(1920,850)->save('upload/slider/'.$name_gen);
        $save_url = 'upload/slider/'.$name_gen;

        Slider::findOrFail($slider_id)->update([
       'title'=> $request->title,
       'short_title'=> $request->short_title,
       'slider_image'=> $save_url,
        ]);
        $notification = array(
            'message' => 'Slider Updated Successfully With Image',
            'alert-type' => 'success'
             ); 
         return redirect()->route('admin-all-slider')->with($notification);  
}else{
    Slider::findOrFail($slider_id)->update([
        'title'=> $request->title,
        'short_title'=> $request->short_title,
        ]);
}
$notification = array(
   'message' => 'Slider Updated Successfully Without Image',
   'alert-type' => 'success'
    ); 
return redirect()->route('admin-all-slider')->with($notification);  
}

public function SliderDelete($id){
    $old_image = Slider::findOrFail($id);
    $slider_image = $old_image->slider_image;
    unlink($slider_image);

    Slider::findOrFail($id)->delete(); 
    $notification = array(
        'message' => 'Slider Deleted Successfully',
        'alert-type' => 'success'
         ); 
     return redirect()->back()->with($notification); 
}

}
