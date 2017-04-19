<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
	protected $primaryKey = 'id';

    protected $table = 'durations';
    
    protected $fillable = [
        'duration'

       
    ];
}


