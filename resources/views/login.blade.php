@extends('blogg.layout')
@section('title','login')
@section('login')
<div class="card text-center border-light bg-light" style="max-width: 60rem; margin-left: 200px;">
    <div class="card-header">
        Login here!!!
    </div>
    <div class="card-body">
      <form class="offset-3" action="/validate" method="post">
         @csrf
          <div class="col-md-8">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name = "email" id="inputEmail4">
            @error('email')
              <div class="alert-warning">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-md-8">
            <label for="inputPassword4" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4">
            @error('password')
              <div class="alert-warning">
                {{ $message }}
              </div>
            @enderror
          </div>
          <br>
         @if (session()->has('status'))
          <div class="col-md-8">
            <div class="alert-warning text-center">
              {{ session()->get('status') }}
            </div>
          </div>
          <br>
        @endif
        <button type="submit" class="btn btn-outline-success" style="margin-left:-231px">Login</button>
      </form>
    </div>
    <div class="card-footer text-muted">
      The Locals
    </div>
</div>
@endsection
