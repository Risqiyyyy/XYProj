<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\GameList;
use Illuminate\Support\Facades\Http;

class MobileLegendsController extends Controller
{
    public function index()
    {
        $gamelist = GameList::where('game', 'Mobile Legends B')->get();
        return view('pages.MobileLegends',compact('gamelist'));
    }
}
