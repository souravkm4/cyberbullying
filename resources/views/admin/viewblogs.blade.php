@extends('layouts.adminmaster')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View Blogs</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                         {{ session('status') }}
                               </div>
                           @elseif(session('error'))
                         <div class="alert alert-danger" role="alert">
                               {{ session('error') }}
                             </div>
                           @endif

                    <div class="col-sm-12">
                    <div class="white-box">
                            <h3 class="box-title">Blogs</h3>
                            
                      
      <table id="example1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      
      <th class="th-sm">S.No
      </th>
      <th class="th-sm">User       </th>
      
      <th class="th-sm">Post</th>
      <th class="th-sm">Rating</th>
      <th class="th-sm">Status </th>
       <th class="th-sm">Actions </th>
    </tr>
  </thead>
  <tbody>
  @php
        $i=1
    @endphp
    @foreach ($blogs as $blog)
        
   
    <tr>
      <td>{{$i}}</td>
      <td>{{$blog->name}}</td>
      <td>{{$blog->comment}}</td>
      <td>{{$blog->rating}}</td>     
      <td>{{$blog->status}}</td>
      <td><button title="Delete blog" class="btn btn-danger btn-sm deleteme" data-value="{{$blog->id}}"  data-toggle="modal" data-target="#modaldelete"><i class="fa fa-trash"></i></button>
<button type="button" data-value="{{$blog->id}}" class="btn btn-primary updateme" data-toggle="modal" data-target="#modalstatus">
<i class="fa fa-comments-o"></i>
</button></td>
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
<th class="th-sm">User       </th>

      <th class="th-sm">Post</th>
      <th class="th-sm">Rating</th>
      <th class="th-sm">Status </th>
       <th class="th-sm">Actions </th>

    </tr>
  </tfoot>
</table>

                    </div>
</div>
 <!-- modal ---> 
 <div class="modal" tabindex="-1" role="dialog" id="modaldelete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('admin.deleteblog')}}">
        @csrf
      <div class="modal-body">
        <p>Are you sure do you want to delete?.</p>
        <input type="hidden" name="dodelete" id="dodelete" />
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">OK</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- modal end here -->
<!-- modal end here -->
<!-- modal ---> 
<div class="modal" tabindex="-1" role="dialog" id="modalstatus">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title">change status</h2>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
<form method="post" action="{{route('admin.postblog')}}">
        @csrf

      <div class="modal-body">
        <div class="col-md-6">
        <div class="form-group">        
          <select id="rstatus" name="rstatus" class="form-control">
          
            <option>accept</option>
            <option>reject</option>

            <input type="hidden" name="doupdate" id="doupdate" />
          </select>
         
          </div>
        </div>
</div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">UPDATE</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>
<!-- modal end here -->
@endsection