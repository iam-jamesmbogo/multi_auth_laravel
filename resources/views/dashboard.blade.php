@extends('layout.master')

@section('content')
{{-- <nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Tables</a></li>
    <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
  </ol>
</nav> --}}

<div class="row">
  <div class="col-lg-12 stretch-card">
    
    <div class="card">
      <div class="card-body">
      
        <div class="alert alert-success" role="alert">
          Welcome, {{ Auth::user()->firstName }}! You have successfully registered and login to your TUCASA CTF account
        </div>
        

        <h4 class="card-title"> This is Your payments details  </h4>
        {{-- <p class="text-muted mb-3">
          Make sure you have paid
        </p> --}}
        <div class="table-responsive pt-3">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>
                  #
                </th>
                <th>
                  Payment Name
                </th>
                <th>
                  Payment Amount
                </th>
                <th>
                  Payment Status
                </th>
              </tr>
            </thead>
            <tbody>
              <tr class="table-info table-warning">
                <td>
                  1
                </td>
                <td>
                  TUCASA Annual Membership Fee
                </td>
                <td>
                  20,000/=
                </td>
                <td>
                  Not Identified
                </td>
              </tr>
              <tr class="table-warning">
                <td>
                  2
                </td>
                <td>
                  CONFERENCE FREE
                </td>
                <td>
                  75,000/=
                </td>
                <td>
                  Not Identified
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection