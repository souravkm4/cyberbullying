@extends('layouts.master')
@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<style>
.checked {
  color:orange;
}
</style>
<div id="main-content" class="blog-page">
        <div class="container">
        <div class="row">
          
                  <h1 class="mb-4">Blogs</h1>
                
                  
    @foreach($blogs as $blog)
    @if($blog->status=='accept')
    <div class="clearfix mt-40">
    <ul class="xsearch-items">
        <li class="search-item">
        
            <div class="search-item-img">
            
                <a href="#">
                <span class="fa fa-star @if($blog->average>=1) checked @endif"></span>
                            <span class="fa fa-star @if($blog->average>=2)  checked @endif"></span>
                            <span class="fa fa-star @if($blog->average>=3) checked @endif"></span>
                            <span class="fa fa-star @if($blog->average>=4) checked @endif"></span>
                            <span class="fa fa-star "></span>
                    <img src="{{asset('blogdp/'."$blog->photo")}}" width="70" height="70">
                </a>
            </div>
            <div class="search-item-content">
            
                <h3 class="search-item-caption"><a href="#">{{$blog->name}}  </a></h3>
               
              
              
                    <ul class="list-inline">
                    <li class="pr-0">
                           
                       </li>                   
                        <li class="time">{{$blog->created_at}}</li>  
                        
                      

                    </ul>
                    
                    
                    
                    
            
                <div>
                    <p>{{$blog->comment}}</p>
                    
                </div>
                <div style="font-size:5px" data-value={{$blog->id}} class="rating"></div>
                
            </div>
          
        </li>

 
    </ul>
</div>
                  @endif
                 
                  @endforeach
                 
              
          </div>
      </div>
                        <div class="card">
                            <div class="header">
                                <h2>Leave a reply <small>Your email address will not be published. Required fields are marked*</small></h2>
                            </div>
                            
                            <div class="body">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                           {{ session('status') }}
                                 </div>
                             @elseif(session('failed'))
                           <div class="alert alert-danger" role="alert">
                                 {{ session('failed') }}
                               </div>
                             @endif
                                <div class="comment-form">
                                    <form method="POST" enctype="multipart/form-data" action="{{route('addblog')}}" class="row clearfix">
                                        @csrf                                  
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" id="aname" name="aname"  class="form-control  @error('aname') is-invalid @enderror" placeholder="Your Name">
                                                @error('aname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror   
                                            </div>
                                        </div>
                                        <div class="form-group">
                                    <label class="col-md-12">profile pic</label>
                                    <div class="col-md-12">
                                        <input type="file" id="file" name="file" placeholder="choice" class="form-control form-control-line @error('afile') is-invalid @enderror"> </div>
                                        @error('file')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                      </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea id="atextarea" name="atextarea"
                                 rows="4" class="form-control no-resize @error('atextarea') is-invalid @enderror" placeholder="Please type what you want..."></textarea>
                                 @error('atextarea')
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                                 @enderror         
                                </div>
                                            <button type="submit" class="btn btn-block btn-primary">SUBMIT</button>
                                        </div>                                
                                    </form>
                                </div>
                            </div>
                        </div>
                </div>
              
            </div>

        </div>
    </div>
    @endsection