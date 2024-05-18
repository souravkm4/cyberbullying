@extends('layouts.usermaster')
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

                    <div class="col-sm-12">
                    <div class="white-box">
                            <h3 class="box-title">Complaints</h3>
                            
                      
      <table id="example1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">S.no

      </th>
      <th class="th-sm">Date
      </th>
      
     
      
      <th class="th-sm">Complaint</th>
       <th class="th-sm">Actions </th>
    </tr>
  </thead>
  <tbody>
  @php
        $i=1
    @endphp
    @foreach ($users as $complaint)
    <tr>
      <td>{{$i}}</td>
      <td>{{$complaint->complaint_date}}</td>
      <td>{{$complaint->description}}</td>
      <td>{{$complaint->reply}}</td>
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



<th class="th-sm">Complaint
 </th>
 <th class="th-sm">Actions
 </th>
    </tr>
  </tfoot>
</table>

                    </div>
<!-- Button trigger modal -->

                  </div>
                </div>
                <!-- /.row -->
            </div>
                        
@endsection
            
