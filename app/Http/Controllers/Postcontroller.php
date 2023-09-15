<?php

namespace App\Http\Controllers;
use App\Http\Requests\SendRequest;
use App\Mail\FeedbackMailer;
use App\Models\Advantages;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function submit(Request $request)
    {
        $category = Category::where('is_active', 1)->get();
        $section_product = Product::where('is_active', 1)->where('popular', 1)->get();
        $asd = Route::currentRouteName();
        $headerAbsolute = 'headerAbsolute';
        $advantag=Advantages::all();
        $slid = Slider::where('is_active', 1)->get();

        $data = ['name'=>$request->input('name'),
        'phone'=>$request->input('phone'),
        'mail'=>$request->input('mail'),
        'comment'=>$request->input('comment' )];

        Mail::to('seregadixi@mail.ru')->send(new FeedbackMailer($data));
        echo "<div id=\"thanksModal\" class=\"modal open\" style=\"display: block;\">
    <div class=\"modal-content\">
        <span class=\"close\">×</span>
        <svg>
            <use href=\"#thanksIco\"></use>
    </svg>
        <p class=\"modal-content__title\">Спасибо! Данные успешно отправлены</p>
    </div>
</div>";
        return view('index', ['slid'=>$slid, 'category' => $category, 'advantag'=>$advantag, 'headerAbsolute'=>$headerAbsolute,'asd'=>$asd, 'section_product' => $section_product]);
    }
}
