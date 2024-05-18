@extends('layouts.adminmaster')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Change Password> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          

                        </a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">View Profile</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-md-8 col-xs-24">
                        <div class="white-box">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                       {{ session('status') }}
                             </div>
                         @elseif(session('error'))
                       <div class="alert alert-danger" role="alert">
                             {{ session('error') }}
                           </div>
                         @endif    
                            
                    <div class="col-md-16 col-xs-24">
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post"  action="{{route('admin.changepassword')}}">                      
                                @csrf
                               
                              
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Current password</label>
                                    <div class="col-md-12">
                                        <input type="password" id="cpassword" name="cpassword" placeholder="password" class="form-control form-control-line" @error('cpassword') is-invalid @enderror> </div>
                                        @error('cpassword')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </span>
                                @enderror
                                    </div>
                               
                                <div class="form-group">
                                    <label class="col-md-12">New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" id="new_password" name="new_password" placeholder="password" class="form-control form-control-line" @error('new_password') is-invalid @enderror> </div>
                                        @error('new_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </span>
                                @enderror
                                    </div>

                                <div class="form-group">
                                    <label class="col-md-12">Confirm New Password</label>
                                    <div class="col-md-12">
                                        <input type="password" id="password_confirmation" name="password_confirmation" placeholder="password" class="form-control form-control-line" @error('password_confirmation') is-invalid @enderror> </div>
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong> 
                                        </span>
                                        @enderror
                                    </div>
                                
                               
                                <div class="form-group">
                                    <div class="col-sm-12">                                      
                                        <button type="submit" class="btn btn-success" >Update Password</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        
                
@endsection