@extends('layouts.adminmaster')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Update Profile> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          

                        </a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Update Profile</li>
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
                            <form class="form-horizontal form-material" method="post" enctype="multipart/form-data"  action="{{route('admin.updateprofile')}}">                      
                                @csrf
                               
                              
                               
                               
                                <div class="form-group">
                                    <label class="col-md-12">New name</label>
                                    <div class="col-md-12">
                                        <input type="text" id="new_name" name="new_name" placeholder="name" class="form-control form-control-line @error('new_name') is-invalid @enderror"> </div>
                                        @error('new_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong> 
                                </span>
                                @enderror
                                    </div>

                                
                                <div class="form-group">
                                    <label class="col-md-12">profile pic</label>
                                    <div class="col-md-12">
                                        <input type="file" id="file" name="file" placeholder="choice" class="form-control form-control-line @error('afile') is-invalid @enderror"> </div>
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                      </div>
                                
                               
                                
                                    <div class="col-sm-12">                                      
                                        <button type="submit" class="btn btn-success" >Update Profile</button>
                                    </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>
</div>

                        
                
@endsection