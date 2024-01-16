<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('category');
    }

    public function news(){
        return view('new');
    }
    public function store(Request $request){
        $name = $request->name;
        $price = $request->price;

        Category::create([
           'name' => $name,
           'price' => $price,
            'sold' => 0
        ]);

        return redirect()->back()->with('success', 'Category created successfully');
    }

}
