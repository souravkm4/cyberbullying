@extends('layouts.adminmaster')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">View Queries</h4> </div>
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
                    <h3 class="box-title">Queries</h3>
                    
              
<table id="example1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
<thead>
<tr>
<th class="th-sm">S.no

</th>
<th class="th-sm">Name
</th>



<th class="th-sm">E-mail</th>
<th class="th-sm">Subject </th>
<th class="th-sm">Phone no </th>
<th class="th-sm">Message</th>
</tr>
</thead>
<tbody>
@php
$i=1
@endphp
@foreach ($contact as $contact)
<tr>
<td>{{$i}}</td>
<td>{{$contact->name}}</td>
<td>{{$contact->email}}</td>
<td>{{$contact->subject}}</td>
<td>{{$contact->phoneno}}</td>
<td>{{$contact->message}}</td>
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
    <th class="th-sm">Name
    </th>
    
    
    
    <th class="th-sm">E-mail</th>
    <th class="th-sm">Subject </th>
    <th class="th-sm">Phone no </th>
    <th class="th-sm">Message</th>
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