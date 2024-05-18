@extends('layouts.master')
@section('content')
<div class="container-fluid py-5">
        <div class="container py-5">
            
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="contact-form">
                        <div id="success"></div>
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
                            <form method="POST" action="{{route('postlogin')}}">
                              @csrf
                              <div class="text-center pb-2">
                                <h6 class="text-uppercase">Login</h6>
                                
                            </div>
                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <input type="email" name="email" id="email" class="form-control" @error('email') is-invalid @enderror />
                            <label class="form-label" for="form2Example1">Email address</label>
                            @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                          </div>

                          <!-- Password input -->
                          <div class="form-outline mb-4">
                            <input type="password" name="password" id="password" class="form-control" @error('password') is-invalid @enderror />
                            <label class="form-label" for="form2Example2">Password</label>
                            @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                          </div>

                          <!-- 2 column grid layout for inline styling -->
                          <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                              <!-- Checkbox -->
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                              </div>
                            </div>

                            
                          </div>

                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                          <!-- Register buttons -->
                          <div class="text-center">
                            <p>Not a member? <a href="{{route('register')}}">Register</a></p>
                            
                           
                        </form>
                      </div>
                    </div>
</div>
</div>
@endsection