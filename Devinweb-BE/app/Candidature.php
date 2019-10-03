<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    protected $fillable = ['first_name', 'last_name','email','telephone','cv','motivation','ID_Offre'];
}
