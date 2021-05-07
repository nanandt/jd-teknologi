<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';

    protected $fillable = ['nama_skill'];

//    protected $primaryKey = 'skill_id';

    public function super(){
        return $this->belongsToMany(Superhero::class);
    }



}
