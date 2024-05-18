@extends('layouts.master')
@section('content')

<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                <h6 class="text-uppercase">Registration</h6>
                
            </div>
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="contact-form">
                        <div id="success"></div>
            
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
               
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                 </div>
             @elseif(session('failed'))
           <div class="alert alert-danger" role="alert">
                 {{ session('failed') }}
               </div>
             @endif
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                    <form method="POST" action="{{route('addvictim')}}">
                      @csrf
                   
           
                      <input type="text" id="afirstname" name="afirstname" class="form-control form-control-lg" />
                      <label class="form-label">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="lname" id="lname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="mname" name="mname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1m1">Mother's name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="fname" name="fname" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1n1">Father's name</label>
                    </div>
                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="address" name="address" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example8">Address</label>
                </div>

                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                  <h6 class="mb-0 me-4">Gender: </h6>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                      value="option1" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender"
                      value="option2" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender"
                      value="option3" />
                    <label class="form-check-label" for="otherGender">Other</label>
                  </div>

                </div>

                <div class="row">
                  <div class="col-md-6 mb-4">

                    <select id="state" name="state" class="select">
                      <option value="">State</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Karnataka">Karnataka</option>
                      
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">

                    <select id="city" name="city" class="select">
                      <option value="">City</option>
                      <option value="Calicut">Calicut</option>
                      <option value="3">Option 2</option>
                      <option value="4">Option 3</option>
                    </select>

                  </div>
                </div>

                <div class="form-outline mb-4">
                  <input type="date" id="dob" name="dob" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example9">DOB</label>
                </div>
                <div class="form-outline mb-4">
                  <label>password</label>
                  <input class="form-control form-control-lg"  type="password" id="apassword" name="apassword" required/>
              </div>
              <div class="form-outline mb-4">
                  <label>confirm</label>
                  <input class="form-control form-control-lg" type="password" id="cpassword" name="cpassword" required/>
              </div>
                

                
                <div class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example97">Email ID</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
              </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
 

@endsection