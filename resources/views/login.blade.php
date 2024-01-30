@extends('layout.auth')

@section('content')

<section>
  <div class="page-header min-vh-75">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
          <div class="card card-plain mt-8">
            <div class="card-header pb-0 text-left bg-transparent">
              <h3 class="font-weight-bolder text-success text-gradient">Welcome back</h3>
              <p class="mb-0">Enter your Email or Phone Number and password to sign in</p>
            </div>
            <div class="card-body">

              @if($errors->any())
                  <div class="alert alert-danger">
                    <div class="text-light">{{ $errors->first() }}</div>
                  </div>
              @enderror              
              
              
              <form action="/login" method="POST" role="form">
                @csrf
                <label>Email or Phone Number</label>
                <div class="mb-3">
                  <input type="text" class="form-control" name="username" placeholder="Email or Phone Number" aria-label="Email" aria-describedby="email-addon" required>
                </div>
                <label>Password</label>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-success w-100 mt-4 mb-0">Sign in</button>
                </div>
              </form>
            </div>
            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto">
                  Forgot Password?
                  <a href="{{ route('forgot-password') }}" class="text-success text-gradient font-weight-bold">Recover</a>
                </p>
              </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/about.jpg')"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection