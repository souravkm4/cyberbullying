@extends('layouts.adminmaster')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View Complaints</h4> </div>
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
                            <h3 class="box-title">Complaints</h3>
                            
                      
      <table id="example1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">S.no  </th>
      <th class="th-sm">Date  </th>
      <th class="th-sm">User  </th>
      <th class="th-sm">E-mail id </th>
      <th class="th-sm">Message  </th>
      <th class="th-sm">Download File</th>
      <th class="th-sm">Reply Message  </th>
       <th class="th-sm">Actions </th>
    </tr>
  </thead>
  <tbody>
    @php
        $i=1
    @endphp
    @foreach ($users as $user)
        
   
    <tr>
      <td>{{$i}}</td>
      <td>{{$user->complaint_date}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->description}}</td>
      <td><a target="_blank" href="{{asset('complaints/'."$user->file")}}">Download</a></td>
      <td>{{$user->reply}}</td>
      <td><button title="Delete Complaint" class="btn btn-danger btn-sm deleteme" data-value="{{$user->id}}"  data-toggle="modal" data-target="#modaldelete"><i class="fa fa-trash"></i></button>
<button type="button" data-value="{{$user->id}}" class="btn btn-primary updateme" data-toggle="modal" data-target="#replyModal">
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
<th class="th-sm">Date
</th>
<th class="th-sm">User

</th>
<th class="th-sm">E-mail id

</th>

<th class="th-sm">Message
 </th>
 <th class="th-sm">Download
</th>
 <th class="th-sm">Reply
 </th>
  <th class="th-sm">Actions </th>
    </tr>
  </tfoot>
</table>

                    </div>
<!-- Button trigger modal -->

                  </div>
                </div>
                <!-- /.row -->
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
      <form method="post" action="{{route('admin.deletecomplaint')}}">
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
<!-- modal ---> 
<div class="modal" tabindex="-1" role="dialog" id="replyModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Reply</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('admin.replytocomplaint')}}">
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" id="rmessage" name="rmessage" required ></textarea>
          <input type="hidden" name="doupdate" id="doupdate" />
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">SEND</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- modal end here -->
@endsection