<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    use HasFactory;
    protected $table = 'victims';
    protected $fillable = [
        'user_id','lastname',"mothersname","fathersname",'address','dob','state','city','gender',
    ];
   

}
