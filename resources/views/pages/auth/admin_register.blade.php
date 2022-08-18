@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pe-md-0">
            <div class="auth-side-wrapper" style="background-image: url({{ asset('assets/images/signup_bg.jpg') }})">
            </div>
          </div>
          <div class="col-md-8 ps-md-0 ">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2">TUCASA<span>CTF</span></a>
              <h5 class="text-muted fw-normal mb-4"> Register into the System.</h5>
              @if (session('status'))
                <div class="alert alert-info" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <form action="{{ route('admin_register') }}" class="forms-sample" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="userFirstName" class="form-label">First Name</label>
                  <input name="firstName" type="text" class="form-control" id="userFirstName" placeholder="First Name" value="{{ old('firstName')}}">
                  @error('firstName')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="userLastName" class="form-label">Last Name</label>
                  <input name="lastName" type="text" class="form-control" id="userLastName" placeholder="Last Name" value="{{ old('lastName')}}">
                  @error('lastName')
                    <div>
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="userEmail" class="form-label">Email address</label>
                  <input name="email" type="email" class="form-control" id="userEmail" placeholder="Email" value="{{ old('email')}}">
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
                <div class="mb-3">
                  <label for="password_confirmation" class="form-label">confirm password </label>
                  <input name="password_confirmation" type="password" class="form-control" id="passwordConfirmation" autocomplete="current-password" placeholder="confirm_password">
                </div>
                <div>
                  <input type="submit" class="form-control btn btn-primary mb-2 me-2 mb-md-0" value="Register" >
                </div>
                <a href="{{ route('login') }}" class="d-block mt-3 text-muted">Already a user? Sign in</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection