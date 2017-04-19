<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'items';

    protected $fillable = [
        'id',
        'user_id',
        'title',
        'category',
        'description',
        //'uploadfile',
        'locationtype',       
        'projectaddress',
        'duration',
        'skill',
        'budget',
        'state',
        'application',
        'created_at',
        'updated_at'      
        
       
    ];
    
}