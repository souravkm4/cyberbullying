<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $table="blogs";
    protected $fillable = [
        'name','email','comment','rating','status','photo','created_at',
    ];
}
