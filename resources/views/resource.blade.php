@extends('layouts.master')
@section('content')

 <!-- Features Start -->
 <div class="container-fluid py-5">
  <div class="container py-5">
      <div class="row">
          <div class="col-lg-6" style="min-height: 500px;">
              <div class="position-relative h-100 rounded overflow-hidden">
                  <img class="position-absolute w-100 h-100" src="img/resourse.jpeg" style="object-fit: cover;">
              </div>
          </div>
          <div class="col-lg-6 pt-5 pb-lg-5">
              <div class="feature-text bg-white rounded p-lg-5">
                  <h6 class="text-uppercase"></h6>
                  <h1 class="mb-4">Resources</h1>
                  @php
                  $i=1
              @endphp
                  @foreach($resources as $resource)
                  <div class="d-flex mb-4">
                      <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                          <h5 class="text-secondary m-0"><b>{{$i}}</b></h5>
                      </div>
                      <div class="ml-4">
                          <h5>{{$resource->title}}</h5>
                          @if($resource->resource_type=='Photo')
                              <img src="{{asset('resources/'."$resource->document")}}">
                          @elseif($resource->resource_type=='Document')
                              <a href="{{asset('resources/'."$resource->document")}}" target="_blank">Download</a>
                          @elseif($resource->resource_type=='Video')

                          @endif
                      </div>
                  </div>
                  @php
    $i++
@endphp
                  @endforeach
                 
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Features End -->

<!-- Gallery -->

     
    
        
    


<!-- Gallery -->
@endsection