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

}
