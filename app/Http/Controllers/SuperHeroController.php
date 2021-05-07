<?php

namespace App\Http\Controllers;

use App\Skill;
use App\Superhero;
use Illuminate\Http\Request;

class SuperHeroController extends Controller
{
    public function detail($id)
    {
        $supers = Superhero::find($id);
//        dd($supers);
        $skills = $supers->skills;
//        dd($skills);
        return view('detail', [
            'skills' => $skills,
            'supers' => $supers
        ]);
    }

    public function tambah($id)
    {
        $super = Superhero::find($id);
        return view('tambah', [
            'super' => $super
        ]);
    }

    public function simpan(Request $request, $id)
    {
        $data = $request->all();
        $super = Superhero::find($id);
        $skills = $super->skills()->create([
            'nama_skill' => $data['nama_skill']
        ]);
        return redirect()->route('detail',$id);
    }

}



