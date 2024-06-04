<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broth extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'imageInactive',
        'imageActive',
        'name',
        'description',
        'price'
    ];    
}
