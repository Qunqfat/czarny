<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\Monsters;
use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    // public function show()
    // {
    //     return view('layout.main');
    // }

    public function equipment()
    {
        return view('postac.equipment');
    }

    public function stats()
    {
        return view('postac.stats');
    }
    public function master()
    {
        return view('layout.master');
    }

    public function rest()
    {
        return view('postac.rest');
    }

    public function monsters(Monsters $monsters)
    {

        return view('pojedynki.monsters', ['monsters' => Monsters::all()]);
    }

    public function characters()
    {
        return view('pojedynki.characters');
    }

    public function fights()
    {
        return view('pojedynki.fights');
    }

    public function animals()
    {
        return view('pojedynki.animals');
    }

    public function shop()
    {
        return view('rynek.shop', ['equipment' => Equipment::all()]);
    }

    public function privateHandel()
    {
        return view('rynek.privateHandel');
    }

    public function playerShop()
    {
        return view('rynek.playerShop');
    }

    public function news()
    {
        return view('miasto.news');
    }

    public function king()
    {
        return view('miasto.king');
    }

    public function jobs()
    {
        return view('miasto.jobs');
    }

    public function guilds()
    {
        return view('gildia.guilds');
    }
}
