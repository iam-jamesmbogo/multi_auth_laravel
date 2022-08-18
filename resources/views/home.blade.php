@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          {{-- <div class="col-md-4 pe-md-0">
            <div class="auth-side-wrapper" style="background-image: url({{ asset('assets/images/tucasa_logo.jpg') }})">
            </div>
          </div> --}}
          <div class="col-md-12 ps-md-0">
            <div class="auth-form-wrapper px-4 py-5">
              <a href="#" class="noble-ui-logo d-block mb-2 text-center">TUCASA<span>CTF</span></a>
              <h5 class="text-muted fw-normal mb-4 text-center"> PAYMENTS SYSTEM </h5>

              <div class="example">
                <div class="row">
                  <div class="col-12 col-md-6 col-xl-4 grid-margin grid-margin-md-0">
                    <div class="card">
                      <img src="{{ url('assets/images/others/bg.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text text-center"> If you have not registered, click Here!.</p>
                        <a href=" {{ route('register')}} " class="btn btn-primary form-control mt-2"> Register me </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4 grid-margin grid-margin-md-0">
                    <div class="card">
                      <img src="{{ url('assets/images/others/bg2.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text text-center">Already registered? Login into your account click here!</p>
                        <a href="{{ route('login')}}" class="btn btn-primary form-control mt-2"> Login </a>
                      </div>

                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4 grid-margin grid-margin-md-0">
                    <div class="card">
                      <img src="{{ url('assets/images/others/bg3.jpg') }}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text text-center">Required Leaders only! <br> Administrator only! </p>
                        <a href="{{ route('admin_login')}}" class="btn btn-outline-primary form-control mt-2"> Administrator </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection