<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Victim;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\DB;

class VictimRegistrationController extends Controller
{
    public function index()
    {
        return view('victimregistration');
    }

public function save(Request $request)
{
    
    $validated = $request->validate([
        'afirstname' => ['required', 'string', 'max:255'],
        'lname'=>['required'],
        'mname'=>['required'],
        'fname'=>['required'],
        'address'=>['required'],
        'gender'=>['required'],
        'state'=>['required'],
        'city'=>['required'],
        'email'=>['required'],
        'dob'=>['required'],
        'apassword' => ['required'],
        
    ]);
    $user=new User();
    $user->name=$request->afirstname;
    $user->email=$request->email;
    $user->password=Hash::make($request->apassword);
    $user->user_type=2;
    $user->save();
    
    $victim=new Victim();
    $victim->user_id=$user->id;
    $victim->lastname=$request->lname;
    $victim->mothersname=$request->mname;
    $victim->fathersname=$request->fname;
    $victim->address=$request->address;
    $victim->dob=$request->dob;
    $victim->state=$request->state;
    $victim->city=$request->city;
    $victim->gender=$request->gender;
    $victim->save();
    if($victim)
        return back()->with('status',"victim added successfully");
    else
        return back()->with('error',"Some error occured please try again later");
}
}