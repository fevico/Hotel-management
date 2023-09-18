<?php

namespace App\Http\Controllers\BAckend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function AdminAddSlider(){
        return view('backend.slider.admin_add_slider');
    }
}
