<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superhero;

class HomeController extends Controller
{
    public function home(){
        $superHero = Superhero::all();
        return view('home', [
            'superHero' => $superHero
        ]);
    }
}
