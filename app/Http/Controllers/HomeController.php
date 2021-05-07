<?php

namespace App\Http\Controllers;

use App\Skill;
use Illuminate\Http\Request;
use App\Superhero;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $superhero = Superhero::all();
        $skill = Skill::all();
//        dd($superhero);
        return view('home', [
            'superhero' => $superhero,
            'skill' => $skill
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

    public function detail(Request $request){
        $skills = Skill::all();
        return view('detail-skill', [
           'skills' =>$skills
        ]);
    }
    public function searchSkill(Request $request)
    {

        $search = $request->search;

        $skills = Skill::where('nama_skill','like','%'.$search.'%')->get();

        return view('detail-skill', [
            'skills' => $skills
        ]);
    }

    public function detailSkillHero($id)
    {
        $skills = Skill::find($id);
//        dd($supers);
        $supers = $skills->super;
//        dd($skills);
        return view('detail-skill-hero', [
            'skills' => $skills,
            'supers' => $supers
        ]);
    }

    public function destroy($id){
        $item = Superhero::find($id);

        $item->delete();

        return redirect('/');
    }
}
