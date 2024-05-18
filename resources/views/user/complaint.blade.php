@extends('layouts.usermaster')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Make your Complaint</div>
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
                            
                    <div class="col-md-16 col-xs-24">
                          
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                                   {{ session('status') }}
                         </div>
                     @elseif(session('error'))
                   <div class="alert alert-danger" role="alert">
                         {{ session('error') }}
                       </div>
                     @endif
                        <div class="white-box">
                            <form class="form-horizontal form-material" method="post" enctype="multipart/form-data" action="{{route('user.savecomplaint')}}">
                                @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Detailed Complaint Description</label>
                                    <div class="col-md-12">
                                       
                                        <textarea class="form-control"  rows="4" cols="50" id="dcomplaint" name="dcomplaint" required></textarea>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Date</label>
                                    <div class="col-md-12">
                                        <input type="date" id="cdate" name="cdate" required  class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                </div>
                            
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Time</label>
                                    <div class="col-md-12">
                                        <input type="time" id="ctime" name="ctime" required  class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                
                            </div>
                                <div class="form-group">
                                    <label class="col-md-12">Upload proof</label>
                                    <div class="col-md-12">
                                       
                                        <input id="file" name="file" required type="file" class="form-control form-control-line">
                                    </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success" >Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection