<?php

use App\Superhero;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@home')->name('home');
Route::get('/query', 'HomeController@search')->name('home.search');
Route::delete('/delete/{id}', 'HomeController@destroy')->name('home.destroy');
Route::get('detail_skills', 'HomeController@detail')->name('detail.skill');
Route::get('/detail_skill/query', 'HomeController@searchSkill')->name('home.search.skill');
Route::get('/detail_skill/{id}', 'HomeController@detailSkillHero')->name('detail.skill.hero');


Route::get('/detail/{id}', 'SuperHeroController@detail')->name('detail');
Route::get('/tambah_skill/{id}', 'SuperHeroController@tambah')->name('tambah.skill');
Route::post('/simpan_skill/{id}', 'SuperHeroController@simpan')->name('simpan.skill');
