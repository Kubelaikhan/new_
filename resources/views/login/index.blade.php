@extends('layouts.main')

  @section('container')
  <h1 class="h3 mb-3 text-center font-weight-normal">Please sign in</h1>

  <div class="row justify-content-center">
    <div class="column-md-4">
      <main class="form-signin">
        <form class="form-signin">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="w-100 btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        <small class="d-block text-center mt-3">Don't have account? <a href="/register">register now</a></small>
    </main>
    </div>
  </div>
 
   
    @endsection
 
