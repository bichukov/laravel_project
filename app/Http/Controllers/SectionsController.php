<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Section;
use App\Models\Product;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function decorations()
    {
        $category = Category::query()->find(1);

        $sec = $category->section1;

        return view('decorations', ['sections' => $category]);

    }

    public function decor_path(string $url_path)
    {

        $sections_id = Section::where('url_path', $url_path)->get();
        foreach ($sections_id as $ci) {
            $sections_id = ($ci->id);
        }
        $section_product = Product::where('is_active', 1)->where('section_id', $sections_id)->get();



        return view('catalog', ['path' => $url_path, 'section_product' => $section_product]);

    }
    public function product_path(string $url_path, int $id)
    {

        $sections_id = Section::where('url_path', $url_path)->get();
        foreach ($sections_id as $ci) {
            $sections_id = ($ci->id);
        }
        $section_product = Product::where('is_active', 1)->where('section_id', $sections_id)->get();

        return view('product', ['path' => $url_path, 'id' => $id, 'section_product' => $section_product]);

    }
}
