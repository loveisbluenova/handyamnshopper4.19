<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
   protected $primaryKey = 'id';

    protected $table = 'skills';
    
    protected $fillable = [
        'skill',
        'description',
        'status'

       
    ];
    
}

