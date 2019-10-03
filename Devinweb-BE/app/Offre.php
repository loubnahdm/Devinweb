<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = ['etat', 'fonction','studylevel',
    'experience','salary', 'title','description_Contexte','description_Profil'];
}
