<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug_categoryname)
    {
      $category=Category::where('slug',$slug_categoryname)->firstOrFail();
      $sub_category=Category::where('top_id',$category->id)->get();

      $products=$category->products;
      
     return view('category',compact('category','sub_category','products'));
    }
}
