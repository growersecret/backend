<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'code',
        'type',
        'percent_P',
        'percent_N',
        'percent_K'   
     ];
}
