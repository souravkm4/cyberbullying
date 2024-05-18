@extends('layouts.usermaster')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Quiz </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
  

                </a>
                <ol class="breadcrumb">
                    <li><a href="#">Dashboard</a></li>
                    <li class="active">Quiz</li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
<div class="container mt-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10 col-lg-10">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                      <h3> {{ session('status') }}</h3>
             </div>
    @elseif(session('failed'))
            <div class="alert alert-danger" role="alert">
                       {{ session('failed') }}
             </div>
    @endif
            <div class="border">
                <form method="POST" action="{{route('user.checkquestion')}}">
                    @csrf
                    @php
                     $i=1
                      @endphp
                @foreach($quiz_questions as $questions)
                <div class="question bg-white p-3 border-bottom" >
                   
                   </div>
                   <div class="question bg-white p-3 border-bottom">
                       <div class="d-flex flex-row align-items-center question-title">
                           <h4 style="color:black;" >{{$i}}.{{$questions->question}}?</h4>
                          
                      
                        </div><div class="ans ml-2" >
<label class="radio"> <input type="radio" name="QS[qchoice][{{$questions->id}}]" value="1"> <span>{{$questions->choice1}}</span>
</label>    
</div><div class="ans ml-2">
<label class="radio"> <input type="radio" name="QS[qchoice][{{$questions->id}}]" value="2"> <span>{{$questions->choice2}}</span>
</label>    
</div><div class="ans ml-2">
<label class="radio"> <input type="radio" name="QS[qchoice][{{$questions->id}}]" value="3"> <span>{{$questions->choice3}}</span>
</label>    
</div><div class="ans ml-2">
<label class="radio"> <input type="radio" name="QS[qchoice][{{$questions->id}}]" value="4"> <span>{{$questions->choice4}}</span>
</label>    <input type="hidden" id="questionid" name="ANS[]" value="{{$questions->id}}"  />

                                        
</div>
</div>
@php
    $i++
@endphp  
@endforeach
                 <button type="submit" class="btn btn-primary" >Submit</button>
                </form>
            </div>

            
        </div>
    </div>
</div>
        </div>
    </div>
</div>
@endsection