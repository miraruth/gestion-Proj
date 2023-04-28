<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proforma extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'nom_projet',
        'les_taches_id',
        'budjet',

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
