<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Category;
use Intervention\Image\Facades\Image;

class RoomController extends Controller
{
    // 
    public function AllRoom(){
        $room = Room::latest()->get();
        return view('backend.room.all_room', compact('room'));
    }

    public function AddRoom(){
        $catgory = Category::all();
        return view('backend.room.add_room', compact('catgory'));
    }

    public function RoomStore(Request $request){
        if($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(960,600)->save('upload/room/'.$name_gen);
            $save_url = 'upload/room/'.$name_gen;

            Room::insert([
           'name'=> $request->name,
           'category_id'=> $request->category_id,
           'short_title'=> $request->short_title,
           'price'=> $request->price,
           'qty'=> $request->qty,
           'status'=> 'active',
           'image'=> $save_url,
            ]);
   }
   $notification = array(
       'message' => 'Room Inserted Successfully',
       'alert-type' => 'success'
        ); 
   return redirect()->route('all-room')->with($notification);
    }
}
