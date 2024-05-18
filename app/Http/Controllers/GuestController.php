<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Session;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\DB;
use App\Models\resource;
use App\Models\blog;
use App\Models\contact;
use App\Models\Rating;
use App\Models\QuizQuestion;

class GuestController extends Controller
{
    public function postlogin(Request $request)
    { $request->validate([
        'email' => 'required',
        'password' => 'required',
    ]);
    $remember_me  = ( !empty( $request->remember) )? TRUE : FALSE;

    if(Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember_me)){
        if(Auth::user()->user_type==1){
            return redirect('adminhome')->withSuccess('You have Successfully loggedin');
        }      
        else{
            return redirect('userhome')->withSuccess('You have Successfully loggedin');
        
        }
    }
    else{
        return redirect("login")->withError('Error! You have entered invalid credentials');
        
    }
}
public function logout() {
    Session::flush();
    Auth::logout();

    return Redirect('login');

}
public function viewresource()
    {
        //$resources=resources::select('*')->get();
        $resources=DB::table('resources')
                ->select('*')
                ->get();
       
        return view('resource',['resources'=>$resources]);
    }
    public function insertblog(Request $request)
    {
        
        $validated = $request->validate([
            'aname'=>['required'],
            'atextarea'=>['required'], 
            'file'=>['required'], 
        ]);
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('blogdp'), $fileName);
        $blog=new Blog();
        $blog->name=$request->aname;
        $blog->photo=$fileName;
        $blog->comment=$request->atextarea;       
        $blog->save();   
        if($blog)
        return back()->with('status',"comment posted successfully");
    else
        return back()->with('error',"Some error occured please try again later");
    } 
    public function viewblogs()
    {
       
        $blogs=Blog::leftjoin('ratings','ratings.blog_id','blogs.id')->select('blogs.*',DB::raw('round(AVG(ratings.rating),0) as average'))->groupBy('ratings.blog_id')->get();     
        
       return view('blog',['blogs'=>$blogs]);
                        
        
    }
    public function postrating(Request $request)
    {
      
       $rating=new Rating();
       $rating->blog_id=$request->blog;
       $rating->rating=$request->ccount;
       $rating->save();
       $average=Rating::Where('blog_id', $request->blog)->pluck('rating')->avg();
       //$average=Rating::avg('rating')->where('blog_id',$request->blog)->get();
       return $average;
    }
    public function contact(Request $request)
    {
        
        $validated = $request->validate([
            'aname'=>['required'],
            'aemail'=>['required'],
            'aphone'=>['required'],  
            'asubject'=>['required'], 
            'amessage'=>['required'],  
        ]);
        $contact=new Contact();
        $contact->name=$request->aname;
        $contact->email=$request->aemail;
        $contact->subject=$request->asubject;    
        $contact->message=$request->amessage; 
        $contact->phoneno=$request->aphone; 
        $contact->save();
        if($contact)
        return back()->with('status',"query posted successfully");
    else
        return back()->with('error',"Some error occured please try again later");
    } 
    public function getquestions()
    {
        $questions = QuizQuestion::select('*')->get();
        //$response['data'] = $questions;
        /*$questionsa;
        foreach($questions as $question)
        {
            $questionsa['question']=$question->question;
            $questionsa['optionA']=$question->choice1;
            $questionsa['optionB']=$question->choice2;
            $questionsa['optionC']=$question->choice3;
            $questionsa['optionD']=$question->choice4;
            $questionsa['correctOption']=$question->answer;
        }*/
        return response()->json($questions);
    }
}

    
        
    
   

