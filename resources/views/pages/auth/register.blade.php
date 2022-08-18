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
              <a href="{{ route('home')}} " class="noble-ui-logo d-block mb-2">TUCASA<span>CTF</span></a>
              <h5 class="text-muted fw-normal mb-4"> Register into the System.</h5>
              @if (session('status'))
                <div class="alert alert-info" role="alert">
                  {{ session('status') }}
                </div>
              @endif
              <form action="{{ route('post_register') }}" class="forms-sample" method="POST">
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
                  <label class="form-label"> Church Branch </label>
                    <select name="churchBranch" class="js-example-basic-single form-select" data-width="100%">

                      <option value="UDOM_HUMANITIES">UDOM HUMANITIES </option>
                      <option value="UDOM_SOCIAL"> UDOM SOCIAL </option>
                      <option value="UDOM_CIVE"> UDOM CIVE </option>
                      <option value="UDOM_TIBA"> UDOM TIBA </option>
                      <option value="UDOM_COED"> UDOM COED </option>
      
                      <!-- MAFINGA -->
                      <option value="MAFINGA_OTC"> MAFINGA OTC </option>
                      <option value="RUNGEMBA_CDTI"> RUNGEMBA CDTI </option>
                      <option value="TJMTC"> TJMTC </option>
                      <option value="BECUS"> BECUS </option>
                      <option value="TUSAARE"> TUSAARE </option>
                      <option value="NEMAHAI"> NEMAHAI </option>
                      <option value="RDO"> RDO </option>
                      <option value="VST"> VST </option>
                      
      
                      <!-- DECCOHAS -->
                      <option value="DECCOHAS"> DECCOHAS </option>
                      <option value="HOMBOLO_MAIN_CAMPUS"> HOMBOLO MAIN CAMPUS </option>
                      <option value="ST_JOHNS"> ST JOHNS </option>
                      <option value="MIPANGO_MAIN_CAMPUS"> MIPANGO MAIN CAMPUS </option>
                      <option value="MIPANGO_FURAHA_CAMPUS"> MIPANGO FURAHA CAMPUS </option>
                      <option value="MADINI"> MADINI </option>
                      <option value="HOMBOLO_TOWN_CAMPUS"> HOMBOLO TOWN CAMPUS </option>
                      <option value="BUSTANI"> BUSTANI </option>
                      <option value="DIDES"> DIDES </option>
                      <option value="TRACID"> TRACID </option>
                      <option value="DODOMA_MEDIA"> DODOMA MEDIA </option>
                      <option value="DECCA_TOWN_CAMPUS"> DECCA TOWN CAMPUS </option>
                      <option value="CBE"> CBE (DODOMA) </option>
      
                      <!-- MUCE -->
                      <option value="MUCE"> MUCE </option>
                      <option value="U_O_I"> U.O.I </option>
                      <option value="RUCU"> RUCU </option>
                      <option value="PHCI"> PHCI </option>
                      <option value="CDTI"> CDTI </option>
                      <option value="DIA"> DIA </option>
      
                      <!-- LITA -->
                      <option value="LITA"> LITA </option>
                      <option value="TTC"> TTC </option>
                      <option value="AFYA"> AFYA </option>
                      <option value="VISELE"> VISELE </option>
                    </select>
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