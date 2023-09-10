


@extends('layouts.main')

    
    @section('container')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <h1 class="display-1 mb-5">{{ $post->title }}</h1>
                        <img src="https://source.unsplash.com/800x400?{{ $post->category->namakat }}" 
                        alt="{{ $post->category->name }}" class="image-fluid" style="align: center">

                        <h5> 
                            <a href="/blog?category={{ $post->category->slug }}" 
                                class="text-decoration-none text-dark"> 
                            {{  $post->category->namakat  }}.</a> <br>
                        </h5>

                        <h6>
                            Posted by: <a class= "text-decoration-none text-dark" 
                            href="/blog?author={{ $post->author->username }}">{{ $post->author->name  }}</a>
                        </h6>

                        <article class = "my-3 fs-5">
                            <p> {!! $post->body !!} </p>
                        </article>

                        <a class="btn  mt-3" href="/blog" role="button">back</a>
                </div>
            </div>
        </div>
        
    @endsection