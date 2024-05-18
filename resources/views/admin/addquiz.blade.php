@extends('layouts.adminmaster')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Add Quiz> </div>
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
                           @elseif(session('failed'))
                         <div class="alert alert-danger" role="alert">
                               {{ session('failed') }}
                             </div>
                           @endif
                              <div class="row">
                                
                            <form method="POST" action="{{route('addquestion')}}">
                                    @csrf
                                <div class="form-group">
                                    <label>Question</label>
                                    
                                        <input type="text" id="aquestion" name="aquestion" placeholder="question" class="form-control form-control-line @error('aquestion') is-invalid @enderror"> 
                                      
                                        @error('aquestion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label>Choice 1</label>
                                   
                                        <input type="text" name="achoice1" id="achoice1" placeholder="choice" class="form-control form-control-line @error('achoice1') is-invalid @enderror"> 
                                      
                                        @error('achoice1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                   
                                </div>
                                <div class="form-group">
                                    <label>Choice 2</label>
                                   
                                        <input type="text" name="achoice2" id="achoice2" placeholder="choice" class="form-control form-control-line @error('achoice2') is-invalid @enderror">
                                        @error('achoice2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Choice 3</label>
                                   
                                        <input type="text" name="achoice3" id="achoice3" placeholder="choice" class="form-control form-control-line @error('achoice3') is-invalid @enderror"> 
                                        @error('achoice3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label>Choice 4</label>
                                   
                                        <input type="text" name="achoice4" id="achoice4" placeholder="choice " class="form-control form-control-line @error('achoice4') is-invalid @enderror">
                                        @error('achoice4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                
                                <div class="form-group">
                                  <label for="answer">Answers</label>
                                  <select id="answer" name="answer" class="form-control form-control-line @error('answer') is-invalid @enderror" rows="4" cols="50">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                  </select>
                                  @error('answer')
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
     
      <th class="th-sm">Question      </th>
      <th class="th-sm">Choice1</th>
      <th class="th-sm">Choice2</th>
      <th class="th-sm">Choice3</th>
      <th class="th-sm">Choice4</th>
      <th class="th-sm">Answers </th>
      <th class="th-sm">Action </th>
      
    </tr>
  </thead>
  <tbody>
    @php
        $i=1
    @endphp
    @foreach ($quiz_questions as $question)
        
    <tr>
      <td>{{$i}}</td>
      <td>{{$question->question}}</td>
      <td>{{$question->choice1}}</td>
      <td>{{$question->choice2}}</td>
      <td>{{$question->choice3}}</td>
      <td>{{$question->choice4}}</td>
      <td>{{$question->answer}}</td>
      <td><button title="Delete question" class="btn btn-danger btn-sm deleteme" data-value="{{$question->id}}"  data-toggle="modal" data-target="#modaldelete"><i class="fa fa-trash"></i></button>
</td>

      
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

<th class="th-sm">Question

</th>
<th class="th-sm">Choice1

</th>
<th class="th-sm">Choice2

</th>
<th class="th-sm">Choice3

</th>
<th class="th-sm">Choice4

</th>
<th class="th-sm">Answers

</th>
<th class="th-sm">Action </th>

 
    </tr>
  </tfoot>
</table>

                    </div>
</div>
                </div>
                <!-- /.row -->
            </div>


            <div class="modal" tabindex="-1" role="dialog" id="modaldelete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="{{route('admin.deletequestion')}}">
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
@endsection
