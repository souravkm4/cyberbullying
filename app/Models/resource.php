<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resource extends Model
{
    use HasFactory;
    protected $table = 'resources';
    protected $fillable = [
        'resource_type','title','description','document',
    ];
}
 