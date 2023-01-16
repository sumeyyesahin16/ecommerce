<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories=Category::whereRaw('top_id is null')->get();
        return view('index',compact('categories'));
    }
}
