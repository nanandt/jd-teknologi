<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superhero;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $superhero = Superhero::all();
//        dd($superhero);
        return view('home', [
            'superhero' => $superhero
        ]);
    }

    public function search(Request $request)
    {

        $search = $request->search;

        $superhero = Superhero::where('nama_hero','like','%'.$search.'%')->get();

        return view('home', [
            'superhero' => $superhero
        ]);
    }
}
