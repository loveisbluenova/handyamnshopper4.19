<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Locationtype extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'locationtypes';
    
    protected $fillable = [
        'locationtype'

    ];
}
