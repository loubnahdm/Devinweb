<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proj extends Model
{
    protected $fillable = ['etat', 'fonction','studylevel',
    'experience','salary', 'title','description'];
}
