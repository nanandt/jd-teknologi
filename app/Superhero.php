<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
    protected $table = "super_hero";

    protected $fillable = ['nama_hero', 'jk_kelamin'];

//    protected $primaryKey = 'superhero_id';

    public function skills(){
        return $this->belongsToMany(Skill::class);
    }

}
