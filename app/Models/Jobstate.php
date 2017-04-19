<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jobstate extends Model
{
   protected $primaryKey = 'id';

    protected $table = 'jobstates';
    
    protected $fillable = [
        'jobstate',
        'description',
        'status'

       
    ];
    
}

