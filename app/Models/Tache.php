<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Tache extends Model
{
    use HasFactory, Notifiable;


    
    protected $fillable = [
        'id',
        'nomT',
        'descriptionT',
        'budjetT',
        'date_debut',
        'date_fin',
    ];

    public function documents()
    {
        return $this->hasmany(Document::class);
    }
}
