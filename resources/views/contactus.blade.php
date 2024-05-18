@extends('layouts.master')
@section('content')
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center pb-2">
            <h6 class="text-uppercase">Contact Us</h6>
            <h1 class="mb-4">Contact For Any Query</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="contact-form">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                                   {{ session('status') }}
                         </div>
                     @elseif(session('failed'))
                   <div class="alert alert-danger" role="alert">
                         {{ session('failed') }}
                       </div>
                     @endif
                    <div id="success"></div>
                    <form method="POST" action="{{route('postcontact')}}">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <label  for="aname"> Name</label>
                                <input type="text" class="form-control p-4" name="aname"id="aname" placeholder="Your Name" class="form-control p-4 @error('aname') is-invalid @enderror"/>
                               
                                @error('aname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <label  for="aemail"> Email</label>
                                <input type="email"  id="aemail" name="aemail" placeholder="Your Email" class="form-control p-4 @error('aemail') is-invalid @enderror" />
                                
                                @error('aemail')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <label  for="aphone">Phone</label>
                            <input type="number"  id="aphone" name="aphone" placeholder="phone no" class="form-control p-4 @error('aphone') is-invalid @enderror"/>
                           
                            @error('aphone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <p class="help-block text-danger"></p>
                    </div>
                        <div class="control-group">
                            <label  for="asubject">Subject</label>
                            <input type="text"  id="asubject" name="asubject" placeholder="Subject" class="form-control p-4 @error('asubject') is-invalid @enderror"/>
                            
                            @error('asubject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <label  for="amessage">Message</label>
                            <textarea  rows="6" id="amessage" name="amessage" placeholder="Message" class="form-control p-4 @error('amessage') is-invalid @enderror"></textarea>
                            
                            @error('amessage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    
                        <img class="position-absolute w-100 h-100" src="img/contact.jfif" style="object-fit: cover;">
                 
                </div>
            </div>
        </div>
    </div>
</div>

@endsection