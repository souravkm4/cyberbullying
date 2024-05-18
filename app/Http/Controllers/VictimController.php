<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizQuestion;
use App\Models\User;
use App\Models\complaint;
use Illuminate\Support\Facades\DB;
use Hash;
use Illuminate\Support\Facades\Auth;
class VictimController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.index');
    }
    public function complaint()
    {
        return view('user.complaint');
    }
    public function addcomplaint(Request $request)
    {
        $validated = $request->validate([
            'dcomplaint'=>['required'],
            'cdate'=>['required'],
            'ctime'=>['required'],
            'file'=>['required'],
           
        ]);
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('complaints'), $fileName);
        $complaint=new complaint();
        $complaint->victim_id=auth::user()->id;
        $complaint->description=$request->dcomplaint;
        $complaint->complaint_date=$request->cdate;
        $complaint->ctime=$request->ctime;
        $complaint->file=$fileName;
        $complaint->save();
        if($complaint)
            return back()->with('status',"Complaint  added successfully");
        else
            return back()->with('error',"Some error occured please try again later");

    }
    public function view()
    {
        return view('user.viewcomplaint');
    }
    public function viewcomplaint()
    {
       //$users=User::select('*')->get();
       $users=DB::table('users')
                ->join('complaints','complaints.victim_id','users.id')
       ->select('complaints.*')
        ->where('users.id',auth::user()->id)
       
        ->get();

return view('user.viewcomplaint',['users'=>$users]);
    }

public function quiz()
    {

        return view('user.quiz');
    }
    public function addquiz()
    {
        //$questions=quiz_questions::select('*')->get();
        $quiz_questions=DB::table('quiz_questions')
               
                ->select('quiz_questions.id','quiz_questions.question','quiz_questions.choice1','quiz_questions.choice2','quiz_questions.choice3','quiz_questions.choice4','quiz_questions.answer')
                ->get();
       
        return view('user.quiz',['quiz_questions'=>$quiz_questions]);
    }
    public function checkquestion(Request $request)
    {
        $mark=0;
        $c=1;
        if(isset($request->QS['qchoice']))
        {
            $ch=count($request->QS['qchoice']);
            $quiz_questions=QuizQuestion::select('*')->get();
            if($ch<count($quiz_questions))
            {
                return back()->with('failed',"Please attend all questions");
                
            }
            else
            {
                    foreach ($request->ANS as $key => $value) 
                    {
                        $books=QuizQuestion::select('answer')->where('id',$request->ANS[$key])->first();
                        if($books->answer==$request->QS['qchoice'][$request->ANS[$key]])
                        {            
                            $mark=$mark+1;
                    
                        }
            }
            return back()
    
            ->with('status',"Your Score is  :".$mark);
            
            }
        }
        else
        {
            return back()->with('failed',"Please attend all questions");
            
        }
       

       
            
    }



    public function password()
    {
        return view('user.changepassword');
    }

    public function updatepassword(Request $request)
    {

        $validate=$request->validate([
                'cpassword' => ['required'],
                'new_password' => ['required'],
                'password_confirmation' => ['same:new_password'],
            ]);
            if (!(Hash::check($request->get('cpassword'), Auth::user()->password))) {
                // The passwords matches
                return redirect()->back()->with("error","Your current password does not matches with the password.");
            }
            else
            {
                $result=User::find(Auth::user()->id)->update(['password'=> Hash::make($request->new_password)]);
                if($result)
                {
                return back()->with('status',"Password changed successfully..");
                }
                else
                {
                return back()->with('error',"Some error occured please try again later..");
                }
                    
                
            }

            
            
    }

    public function getquiz()
    {
        $quiz_questions=Quiz::select('*')->get();
        
        return response()->json($quiz_questions);
    }
}
        
