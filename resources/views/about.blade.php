
@extends('layouts.main')


    @section('container')

        <nav class="bg-dark-subtle">
            <ol class="breadcrumb ">
            <li class="breadcrumb-item {{ ($title === "about") ? 'active' : ' '}}" ><a href="/about">About</a></li>
            <li class="breadcrumb-item {{ ($title === "login") ? 'active' : ' '}}"><a href="/login">Book's</a></li>
            <li class="breadcrumb-item {{ ($title === "account") ? 'active' : ' '}}"><a href="#">Account</a></li>
            </ol>
        </nav>

        <div>

            <h3 class="display-1 mt-5 align-self-center" >About</h3>
            <h2 class="mt-5"> {{ $name }}</h2>
            <p class="mt-3">{{ $motto }} <br>
                <a> {{ $email }} </a>
            </p>
            <img src="img/karina.GIF" alt="stat" class="img-fluid img-thumbnail rounded-bottom rounded-top mt-2"  width="auto" height="200" >
        
        </div>
        @endsection