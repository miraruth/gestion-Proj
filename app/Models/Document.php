<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;


    
    protected $fillable = [
        'id',
        'nomD',
        'typeD',
        'date_mise_a_jour',
    ];

    public function projet()
    {
        return $this->belongTo(Projet::class);
    }
}
