<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Graphisme extends Model
{
    use HasFactory,Notifiable;


    
    protected $fillable = [
        'nomG',
        'données',
        'date',
 
    ];


    public function taches()
    {
        return $this->hasmany(Tache::class);
    }

    public function projets()
    {
        return $this->hasmany(Projet::class);
    }
}
