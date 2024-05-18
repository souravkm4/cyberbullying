<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizQuestion;
use App\Models\User;
use App\Models\resource;
use App\Models\complaint;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\blog;
use App\Models\contact;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index');
    }

    public function addquizpage()
    {
        return view('admin/addquiz');
    }
    public function viewreport()
    {
        //$users=User::select('*')->get();
        $users=DB::table('users')
                ->join('complaints','complaints.victim_id','users.id')
                ->select('users.name','users.email','complaints.description','complaints.complaint_date','complaints.reply','complaints.id','complaints.file')
                ->get();
       
        return view('admin/viewreport',['users'=>$users]);
    }
    public function save(Request $request)
{
    
    $validated = $request->validate([
        'aquestion'=>['required'],
        'achoice1'=>['required'],
        'achoice2'=>['required'],
        'achoice3'=>['required'],
        'achoice4'=>['required'],
        'answer'=>['required'],
    ]);
    $quiz_question=new QuizQuestion();
    $quiz_question->question=$request->aquestion;
    $quiz_question->choice1=$request->achoice1;
    $quiz_question->choice2=$request->achoice2;
    $quiz_question->choice3=$request->achoice3;
    $quiz_question->choice4=$request->achoice4;
    $quiz_question->answer=$request->answer;
    $quiz_question->save();
    return back()->with('status',"Question added successfully");
}
public function addquiz()
    {
        //$questions=quiz_questions::select('*')->get();
        $quiz_questions=DB::table('quiz_questions')
               
                ->select('quiz_questions.question','quiz_questions.choice1','quiz_questions.choice2','quiz_questions.choice3','quiz_questions.choice4','quiz_questions.answer','quiz_questions.id')
                ->get();
       
        return view('admin/addquiz',['quiz_questions'=>$quiz_questions]);
    }
    public function addresource()
    {
        return view('admin/addresources');
    }
    public function addaresource(Request $request)
    {
        
        $validated = $request->validate([
            'atype'=>['required'],
            'atitle'=>['required'],
            'adescription'=>['required'],
            'file'=>['required'],
            
        ]);
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('resources'), $fileName);
        $resource=new Resource();
        $resource->resource_type=$request->atype;
        $resource->title=$request->atitle;
        $resource->description=$request->adescription;
        $resource->document=$fileName;
        $resource->save();
        if($resource)
            return back()->with('status',"resource added successfully");
        else
            return back()->with('error',"Some error occured please try again later");
        
              
    }
    public function viewresource()
    {
        //$resources=resources::select('*')->get();
        $resources=DB::table('resources')
               
                ->select('resources.resource_type','resources.title','resources.description','resources.document')
                ->get();
       
        return view('admin/addresources',['resources'=>$resources]);
    }
    public function deletecomplaint(Request $request)
    {
        $delete=complaint::where('id',$request->dodelete)->delete();
        if($delete)
            return back()->with('status',"Complaint deleted successfully");
        else
            return back()->with('error',"Some error occured please try again later");
        
    }
    public function deletequestion(Request $request)
    {
        $delete=complaint::where('id',$request->dodelete)->delete();
        $delete=QuizQuestion::where('id',$request->dodelete)->delete();
        if($delete)
            return back()->with('status',"question deleted successfully");
        else
            return back()->with('error',"Some error occured please try again later");
        
    }
    public function replytocomplaint(Request $request)
    {
        $validated = $request->validate([
            'rmessage'=>['required'],
            
        ]);
        $update=complaint::where('id',$request->doupdate)->update(['reply'=>$request->rmessage]);
        if($update)
            return back()->with('status',"Reply sent successfully");
        else
            return back()->with('error',"Some error occured please try again later");
        
    }
    public function password()
    {
        return view('admin/changepassword');
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


           public function deleteblog(Request $request)
            {
                $delete=blog::where('id',$request->dodelete)->delete();
                if($delete)
                    return back()->with('status',"blog deleted successfully");
                else
                    return back()->with('error',"Some error occured please try again later");
                
            }
            public function readblog()
            {
                //$blogs=blogs::select('*')->get();
                $blogs=DB::table('blogs')
                       
                        ->select('*')
                        ->get();
               
                return view('admin/viewblogs',['blogs'=>$blogs]);
            }
          
            public function blogstatus(Request $request)
            {
                $validated = $request->validate([
                    'rstatus'=>['required'],
                    
                ]);
                $update=blog::where('id',$request->doupdate)->update(['status'=>$request->rstatus]);
                
                if($update)
                    return back()->with('status',"status changed successfully");
                else
                    return back()->with('error',"Some error occured please try again later");
            }
            public function query()
            {
                return view('admin/viewquery');
            }
            
            public function viewquery()
    {
        //$resources=resources::select('*')->get();
        $contact=DB::table('contact')
               
                ->select('*')
                ->get();
       
        return view('admin/viewquery',['contact'=>$contact]);
    }
    public function profile(Request $request)
    {
        
        $validate=$request->validate([
            
            'new_name' => ['required'], 
            'file'=>['required'],       
        ]);
        $fileName = time().'.'.$request->file->extension();  
        $request->file->move(public_path('profilephoto'), $fileName);
        $result=User::find(Auth::user()->id)->update(['name'=>($request->new_name),'photo'=>$fileName]);
        if($result)
        return back()->with('status',"profile updated successfully");
    else
        return back()->with('error',"Some error occured please try again later");
      
          
            
        
            
    }
}


        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
 