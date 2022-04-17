<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_formation',
        'description',
        'durée',
        'prix',
    ];
    function Administrateur()
    {


        return $this->belongsTo(Administrateur::class);
    }
    function session()
    {
        return $this->hasMany(session::class, 'id_formation');
    }
}
