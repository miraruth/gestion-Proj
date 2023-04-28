<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Projet extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nomP',
        'descriptionP',
        'budjetP',
        'date_debut',
        'date_fin',
    ];

    public function documents()
    {
        return $this->hasmany(Document::class);
    }

    public function taches()
    {
        return $this->hasmany(Tache::class);
    }
    
}
