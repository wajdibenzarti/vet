<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';

    protected $fillable = ['name','type','specie','user_id'];

    public function user()
    {
        return $this->hasOne('App\User');
    }
}
