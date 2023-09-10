<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{      

    public function index(){
    
        $title ='';

        if(request('category')){
                $category = Category::firstWhere('slug', request('category'));
                $title = ' in '.$category->namakat;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '.$author->name;

        }

        // dd(request('search'));
        return view('blog', [
            "title"=>"All Posts".$title,
            "active"=>'blog',
            //"posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))
            ->paginate(5)->withQueryString()
        ]);
    }

    public function show(Post $post){
            return view('post',[
                "title" => $post->title,
                "active"=>'blog',
                "post" => $post
        ]);
    }
}
