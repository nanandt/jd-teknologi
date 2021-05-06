<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $table = "super_hero";

    protected $fillable = ['nama', 'jk_kelamin', 'skill'];
}
