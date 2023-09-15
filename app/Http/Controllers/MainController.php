<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Models\Slider;
use App\Models\Advantages;
use App\Models\Section;
use App\Http\Requests\SendRequest;
use App\Mail\FeedbackMailer;
use Mail;

class MainController extends Controller
{

    public function sliders()
    {   $section_product = Product::where('is_active', 1)->where('popular', 1)->get();

        foreach ($section_product as $id)
        {

            $path= Section::where('is_active', 1)->where('id',$id->section_id)->get();
         }

;



        $asd = Route::currentRouteName();

        $headerAbsolute = 'headerAbsolute';
        $advantag = Advantages::all();
        $slid = Slider::where('is_active', 1)->get();
        $category = Category::where('is_active', 1)->get();
        return view('index', ['slid' => $slid, 'category' => $category, 'path' => $path, 'advantag' => $advantag, 'headerAbsolute' => $headerAbsolute, 'asd' => $asd, 'section_product' => $section_product]);
    }

    public function contacts()
    {
//
        $asd = Route::currentRouteName();

        return view('contacts', ['asd' => $asd]);

    }

    public function contacts_post(SendRequest $request)
    {
        $validated = $request->validated();
        $asd = Route::currentRouteName();
        $headerAbsolute = 'headerAbsolute';
        $data = ['name' => $validated['name'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'mail' => $validated['mail'] ?? null,
            'comment' => $validated['comment'] ?? null];
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
        return view('contacts', ['headerAbsolute' => $headerAbsolute, 'asd' => $asd]);
    }

    public function delivery()
    {
        $asd = Route::currentRouteName();

        return view('delivery', ['asd' => $asd]);
    }

    public function delivery_post(SendRequest $request)
    {
        $validated = $request->validated();
        $asd = Route::currentRouteName();
        $headerAbsolute = 'headerAbsolute';
        $data = ['name' => $validated['name'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'mail' => $validated['mail'] ?? null,
            'comment' => $validated['comment'] ?? null];
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
        return view('delivery', ['headerAbsolute' => $headerAbsolute, 'asd' => $asd]);
    }

    public function aboutCompany()
    {
        $advantag = Advantages::all();
        $asd = Route::currentRouteName();
        return view('aboutcompany', ['asd' => $asd, 'advantag' => $advantag,]);
    }

    public function aboutCompany_post(SendRequest $request)
    {       $advantag = Advantages::all();
        $validated = $request->validated();
        $asd = Route::currentRouteName();
        $headerAbsolute = 'headerAbsolute';
        $data = ['name' => $validated['name'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'mail' => $validated['mail'] ?? null,
            'comment' => $validated['comment'] ?? null];
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
        return view('aboutcompany', ['headerAbsolute' => $headerAbsolute, 'asd' => $asd, 'advantag' => $advantag,]);
    }


}
