@extends('layouts/master')
@section('content')
<div class="col-md-12">
    <div class="row">
        <form method="POST" action="{{route('postadminform')}}">
        @if (session('status'))
   		<div class="alert alert-success" role="alert">
  					{{ session('status') }}
			</div>
   @elseif(session('failed'))
       	<div class="alert alert-danger" role="alert">
  					{{ session('failed') }}
			</div>
   @endif
            @csrf
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" id="aname" name="aname" required/>
</div>
<div class="form-group">
            <label>email id</label>
            <input class="form-control" type="email" id="email" name="email" required/>
</div>
<div class="form-group">
            <label>password</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" required/>
            @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror
</div>
<div class="form-group">
            <label>confirm</label>
            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required/>
</div>
<input type="submit" class="btn btn-primary" id="sadmin" value="save" />
</form>
</div>
</div>
@endsection