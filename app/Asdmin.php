<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asdmin extends Model
{
    protected $table = 'asdmin';
    protected $fillable = ['name','email','post','image'];
}
