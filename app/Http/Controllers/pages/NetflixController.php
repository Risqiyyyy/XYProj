<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\GameList;
use Illuminate\Support\Facades\Http;

class NetflixController extends Controller
{
    public function index()
    {
        $gamelist = GameList::where('game', 'Netflix Premium')->get();
        return view('pages.Netflix',compact('gamelist'));
    }
}
