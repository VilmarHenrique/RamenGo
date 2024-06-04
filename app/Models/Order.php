<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
     'broth_id',
     'protein_id',
     'description',
     'image'
    ];
    
    public function protein()
    {
        return $this->belongsTo(Protein::class, 'protein_id');
    }

    public function broth()
    {
        return $this->belongsTo(Broth::class, 'broth_id');
    }
     
}

