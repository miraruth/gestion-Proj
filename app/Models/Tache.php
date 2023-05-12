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




    
    public function graphisme()
    {
        return $this->belongTo(Graphisme::class);
    }

    public function proforma()
    {
        return $this->belongTo(Proforma::class);
    }

    public function projet()
    {
        return $this->belongTo(Projet::class);
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
