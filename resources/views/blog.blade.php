

@extends('layouts.main')


 @section('container')
 <!-- <link rel="stylesheet" href="css/style.css"> -->
    <h1 class="text-center display-2  mb-4"> {{ $title }} </h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                    <input type="hidden" name="auhtor" value="{{ request('author') }}">
              @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" value="{{ request('search') }}" placeholder="Search" name="search">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
    @if ($posts->count())
        <div class="card mb-3">
            <img class="card-img-top" src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->namakat }}" alt="Card image cap">
            <div class="card-body" >
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <h4  class="font-weight-bold">
                    <a href="/blog?author={{ $posts[0]->author->username }}">
                        {{ $posts[0]->author->name }} </a>, 
                    <a href="/blog?category={{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->namakat }}</a>
                </h4>
                <p class="card-text">{{ $posts[0]->excerpt }}.</p>
                <p class="card-text"><small class="text-muted">{{ $posts[0]->created_at->diffForHumans()}}</small></p>
                
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary"> Read </a>
            </div>
        </div>   


        <div class="container">   
            <div class="row" style="height:12rem">
            @foreach ($posts->skip(1) as $post)    
                <div class="col-md-4 mb-4" >
                    <div class="card" >
                        <div class="position-absolute bg-dark text-white" style="background-color: rgba(0,0,0,0.7)">
                            <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-white">
                                {{ $post->category->namakat }} </a>
                        </div>
                        <img class="card-img-top" src="https://source.unsplash.com/500x500?{{ $post->category->name }}" alt="{{ $posts[0]->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="font-weight-bold text-decoration-none text-dark">
                                <a href="/blog?author={{ $post->author->username }}">{{ $post->author->name }} </a>, 
                                <p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary"> Read more</a>
                            <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans()}}</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    @else 
        <p class="text-center fs-4"> No posts.</p>
    @endif

   

@endsection