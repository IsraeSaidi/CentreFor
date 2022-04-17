<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'cin',
        'tel',
        'email',
        'profil',
       
    ];
    function Utilisateur(){
        return $this->hasMany(Utilisateur::class);
}
    function Formation(){
        return $this->hasMany(Formation::class);
}
    
}
