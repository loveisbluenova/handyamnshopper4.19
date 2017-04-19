<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $primaryKey = 'id';

    protected $table = 'bids';

    protected $fillable = [
        'id',
        'user_id',
        'pro_no',
        'description',        
        'state',
        'application',
        'created_at',
        'updated_at'      
        
       
    ];
    
}