@extends('layouts.adminmaster')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Resources> </div>
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
                              <div class="row">
                                
                            <form method="post" enctype="multipart/form-data" action="{{route('admin.saveresource')}}">
                                    @csrf
                              
                                <div class="form-group">
                                    <label class="col-md-12">Type</label>
                                    <div class="col-md-12">
                                       <select id="atype" name="atype" class="form-cotrol @error('atype') is-invalid @enderror">
                                        <option>Document</option>
                                        <option>Photo</option>
                                        <option>Video</option>
                                       </select> 
                                       @error('atype')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                  
                                    <label class="col-md-12">Title</label>
                                    <div class="col-md-12">
                                        <input type="text" id="atitle" name="atitle" placeholder="choice" class="form-control form-control-line @error('atitle') is-invalid @enderror"> </div>
                                        @error('atitle')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                      </div>
                                <div class="form-group">
                                    <label class="col-md-12">Description</label>
                                    <div class="col-md-12">
                                        <textarea id="adescription" name="adescription" class="form-control form-control-line @error('adescription') is-invalid @enderror"></textarea> </div>
                                        @error('adescription')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                      </div>
                                <div class="form-group">
                                    <label class="col-md-12">File</label>
                                    <div class="col-md-12">
                                        <input type="file" id="file" name="file" placeholder="choice" class="form-control form-control-line @error('afile') is-invalid @enderror"> </div>
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                      </div>
                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                      <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>
<table id="example1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">S.no

      </th>
     
      <th class="th-sm">type      </th>
      <th class="th-sm">title </th>
      <th class="th-sm">description </th>
      <th class="th-sm">document</th>
      
    </tr>
  </thead>
  <tbody>
    @php
        $i=1
    @endphp
    @foreach($resources as $resource)
         <tr>
      
         <td>{{$i}}</td>
         <td>{{$resource->resource_type}}</td>
         <td>{{$resource->title}}</td>
         <td>{{$resource->description}}</td>
         <td><a target="_blank" href="{{asset('resources/'."$resource->document")}}">Download</a></td>
         </tr>
    @php
    $i++
@endphp
@endforeach
    
   
  </tbody>
  <tfoot>
    <tr>
      <th class="th-sm">S.no

      </th>
     
      <th class="th-sm">type      </th>
      <th class="th-sm">title </th>
      <th class="th-sm">description </th>
      <th class="th-sm">document</th>

</th>

 
    </tr>
  </tfoot>
</table>

                    </div>
</div>
                </div>
                <!-- /.row -->
            </div>
@endsection
