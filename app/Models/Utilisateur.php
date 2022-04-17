<?php

namespace App\Models;

use App\Http\Controllers\AdministrateurController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'age',
        'cin',
        'email',
        'formation',
        'tel',
        'is_payer',
        'niveau',
        'profil',
        'description',
    ];
    function Administrateur()
    {


        return $this->belongsTo(Administrateur::class);
    }

    function session()
    {
        return $this->hasMany(session::class, 'id_formateur');
    }
}
