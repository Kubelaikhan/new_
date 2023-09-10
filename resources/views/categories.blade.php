


@extends('layouts.main')


    @section('container')
        <h1 class="mb-5 "> All categories </h1>

        <div class="categories">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-4 mb-4 ">
                        <a href="/blog?category={ $category->slug }}">
                            <div class="card bg-dark text-white">
                                <img class="card-img-top" src="https://source.unsplash.com/500x400?{{ $category->namakat }}" alt="{{ $category->namakat }}">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p4 fs-3" style="background-color:rgba(0,0,0,0.7)
                                    ">{{  $category->namakat  }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection