<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
  

    public $table = 'radcheck';
    
    public $timestamps = false;

   protected $fillable = [
        'username',
        'attribute',
        'op',
        'value'
       
    ];

}
