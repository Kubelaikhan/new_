@extends('layouts.main')

  @section('container')
  <h1 class="h3 mb-3 text-center font-weight-normal">Register yourself!</h1>

  <div class="row justify-content-center">
    <div class="column-lg-5">
      <main class="form-registration">
        <form method="post" action="/register">
            @csrf
            <label for="name" class="sr-only">Name</label>
            <input type="text" name="name"id="name" class="form-control rounded-topr" placeholder="Your name" required autofocus>
            @error('name')
                <div class="invalid-feedback">
                    Please choose a Name.
                </div>
            @enderror
            
            <label for="username" class="sr-only">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="username" required autofocus>
            
            <label for="email" class="sr-only">Email address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com" required autofocus>
            
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password "id="password" class="form-control rounded-bottom" placeholder="put your password" required>
            
            <button class="w-100 btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">Already login?<a href="/login">Login!</a></small>
    </main>
    </div>
  </div>
 
   
    @endsection
 
