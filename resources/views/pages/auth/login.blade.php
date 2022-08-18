@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pe-md-0">
            <div class="auth-side-wrapper" style="background-image: url({{ asset('assets/images/tucasa_logo.jpg') }})">
            </div>
          </div>
          <div class="col-md-8 ps-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="{{ route('home')}}" class="noble-ui-logo d-block mb-2">TUCASA<span>CTF</span></a>
              <h5 class="text-muted fw-normal mb-4">Welcome back! Log in to your account.</h5>

              @if (session('status'))
                <div class="alert alert-info" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <form method="POST" action="{{ route('login_post') }}" class="forms-sample">
                @csrf
                <div class="mb-3">
                  <label for="userEmail" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="userEmail" placeholder="Email">
                  @error('email')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>


                <div class="mb-3">
                  <label for="userPassword" class="form-label">Password</label>
                  <input name="password" type="password" class="form-control" id="userPassword" autocomplete="current-password" placeholder="Password">
                  @error('password')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                {{-- <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="authCheck">
                  <label class="form-check-label" for="authCheck">
                    Remember me
                  </label>
                </div> --}}
                <div>
                  <input type="submit" class="form-control btn btn-primary mb-2 me-2 mb-md-0" value="Login" >
                </div>
                <a href="{{ route('register') }}" class="d-block mt-3 text-muted">Not registered? Register here!</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection