<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class session extends Model
{
    use HasFactory;
    protected $fillable = ['id_formation', 'id_formateur', 'date_debut', 'temps_debut', 'temps_fin', 'salle', 'id_secretaire', 'formation', 'formateur', 'id_salle'];
    public function sallee()
    {
        return $this->belongsTo(salle::class, 'id_salle');
    }

    public function formateurs()
    {
        return $this->belongsTo(Utilisateur::class, 'id_formateur');
    }
    public function formations()
    {
        return $this->belongsTo(Formation::class, 'id_formation');
    }
}
