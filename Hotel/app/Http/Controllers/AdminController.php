<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; 

class AdminController extends Controller
{
    //
    public function AdminDashboard(){
        return view('admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminProfile(){
        $id = Auth::user()->id;
        $adminData = Auth::user($id);
        return view('admin.admin_profile_view', compact('adminData'));
    }

    public function AdminProfileStore(Request $request){
    $id = Auth::user()->id;
    $data = User::find($id);
    $data->name = $request->name; 
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;

    if($request->file('image')){
        $file = $request->file('image');
        @unlink(public_path('upload/admin_image/'.$data->image));
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('upload/admin_image'),$filename);
        $data['image'] = $filename; 
    }
    $data->save();

    $notification = array(
        'message' => 'Admin Profile Updated Succesfully',
        'alert-type' => 'success',
    );
    return redirect()->back()->with($notification);
}
    
}
