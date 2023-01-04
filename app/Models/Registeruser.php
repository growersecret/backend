<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Registeruser extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
 
    protected $fillable = [
        'name',
        'address',
        'number',
        'profile_setup',
       'hit_remaining',
       'email',
        'otp',
    ];
}
