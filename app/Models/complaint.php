<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    use HasFactory;
    protected $table="complaints";
    protected $fillable = [
        'victim_id ','description','complaint_date','ctime','file','reply','reply_date',
    ];
}
