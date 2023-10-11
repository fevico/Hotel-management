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

    public function RoomEdit($id){
        $category = Category::latest()->get();
        $room = Room::findOrFail($id);
        return view('backend.room.edit_room', compact('category', 'room'));
    }

    public function RoomUpdate(Request $request){
        $id = $request->id;

        if($request->file('image')){
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
           Image::make($image)->resize(960,600)->save('upload/room/'.$name_gen);
            $save_url = 'upload/room/'.$name_gen;

            Room::findOrFail($id)->update([
           'name'=> $request->name,
           'category_id'=> $request->category_id,
           'short_title'=> $request->short_title,
           'price'=> $request->price,
           'qty'=> $request->qty,
           'status'=> 'active',
           'image'=> $save_url,
            ]);
   
   $notification = array(
       'message' => 'Room Inserted With Image Successfully',
       'alert-type' => 'success'
        ); 
   return redirect()->route('all-room')->with($notification);

    }else{
       
        Room::findOrFail($id)->update([
            'name'=> $request->name,
            'category_id'=> $request->category_id,
            'short_title'=> $request->short_title,
            'price'=> $request->price,
            'qty'=> $request->qty,
            'status'=> 'active',
             ]);
    
    $notification = array(
        'message' => 'Room Inserted Successfully',
        'alert-type' => 'success'
         ); 
    return redirect()->route('all-room')->with($notification); 
    }
}

public function RoomDelete($id){
    $old_image = Room::findOrFail($id);
    $room_image = $old_image->image;
    unlink($room_image);

    Room::findOrFail($id)->delete(); 
    $notification = array(
        'message' => 'Room Deleted Successfully',
        'alert-type' => 'success'
         ); 
     return redirect()->back()->with($notification); 

}
}
