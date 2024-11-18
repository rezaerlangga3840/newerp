@extends('auth.master.main')
@section('quickaccess')
<div class="col-2 text-center ms-auto">
  <a class="btn btn-link px-3" href="javascript:;">
    <i class="fa fa-facebook text-white text-lg"></i>
  </a>
</div>
<div class="col-2 text-center px-1">
  <a class="btn btn-link px-3" href="javascript:;">
    <i class="fa fa-github text-white text-lg"></i>
  </a>
</div>
<div class="col-2 text-center me-auto">
  <a class="btn btn-link px-3" href="javascript:;">
    <i class="fa fa-google text-white text-lg"></i>
  </a>
</div>
@endsection
@section('pagetitle')
Mlebu
@endsection
@section('pagecontent')
<form method="POST" action="{{ route('login') }}" class="text-start">
  @csrf
  <div class="input-group input-group-outline my-3">
    <label class="form-label">Email</label>
    <input type="email" id="email" name="email" class="form-control">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Password</label>
    <input type="password" id="password" name="password" class="form-control">
  </div>
  <div class="form-check form-switch d-flex align-items-center mb-3">
    <input class="form-check-input" type="checkbox" id="remember_me" name="remember" checked>
    <label class="form-check-label mb-0 ms-3" for="remember_me">Remember me</label>
  </div>
  <div class="text-center">
    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign in</button>
  </div>
  <p class="mt-4 text-sm text-center">
    Don't have an account?
    <a href="#" class="text-primary text-gradient font-weight-bold">Sign up</a>
  </p>
</form>
@endsection