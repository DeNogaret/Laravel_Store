<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($cat, $category_id){
        $category = Category::where('id', $category_id)->first();

        return view('category.showCategories',[
            'category' => $category
        ]);
    }
}
