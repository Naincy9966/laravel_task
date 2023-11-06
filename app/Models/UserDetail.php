<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;
    protected $fillable = [  
        'user_id',
        'gender',
        'address',
        'latitude',
        'longitude',
        'date_of_birth',
        'year_of_establish',
        'adhar_card_number',
        'image',
        'date_of_joining',
        'date_of_leaving',
        'description'
    ];
 
    protected $dates = [
        'updated_at',
        'created_at',
    ];


    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
}
