<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
   
    public function index(){
        return view('categories', [
            "title"=>"All Categories",
            "active"=>'category',
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category){
        return view('blog',[
            'title' => "This is: $category->namakat page.",
            "active"=>'category',
            'posts'=> $category->posts->load(['category', 'author']),  
        ]);
    }
}
