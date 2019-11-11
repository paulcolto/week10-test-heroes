<?php

namespace App\Http\Controllers;

use App\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index() 
    {
        $hero = Hero::orderBy('name', 'asc')->get();

        $view = view('hero/index');
        $view->hero = $hero;
        return $view;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           'subject',
           'description'
        ]);

        $hero = Hero::create($request->all());

        return redirect(action('HeroController@index'));
    }
}
