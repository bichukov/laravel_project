<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Advantages;
class MainController extends Controller
{
    public function Sliders(){
$advantag=Advantages::all();

$slid = Slider::where('is_active', 1)->get();

        return view('index', ['slid'=>$slid, 'advantag'=>$advantag]);
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function delivery()
    {
        return view('delivery');
    }
        public function aboutcompany()
    {
        return view('aboutcompany');
    }

}
