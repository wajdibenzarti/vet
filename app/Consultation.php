<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table = 'consultations';

    protected $fillable = ['type','date','user_id','vet_id','pet_id'];
}