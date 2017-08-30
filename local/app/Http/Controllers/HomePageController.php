<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Slider;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function getInfoHomepage(){
        $emps = Employee::where('emp_is_work', '=', '1')->orderBy('emp_order', 'ASC')->get();
        $sliders = Slider::where('slider_is_active', '=', '1')->orderBy('slider_order', 'DESC')->get();
        return view('frontend.trangchu.index', compact('emps','sliders'));
    }
}
