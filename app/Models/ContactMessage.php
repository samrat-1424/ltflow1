<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $table = 'contact_messages'; 
    protected $fillable = [                                                                                                                                          //Laravel will only fill the columns listed in $fillable.
        'full_name', 'mobile', 'email', 'company', 'message'

         
    
    ];
}