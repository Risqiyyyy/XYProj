<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\GameList;
use Illuminate\Support\Facades\Http;

class ProdukController extends Controller
{
    public function index()
    {
        $key = env('VIP_RESELLER_API_KEY');
        $sign = env('VIP_RESELLER_API_SIGN');
    
        $response = Http::asForm()->post('https://vip-reseller.co.id/api/game-feature', [
            'key' => $key,
            'sign' => $sign,
            'type' => 'services',
            'filter_status' => 'available'
        ]);
    
        $data = $response->json();

        // if (is_array($data)) {
        //     foreach ($data as $item) {
        //         if (is_array($item)){
        //             foreach ($item as $subItem) {
        //                 $code = $subItem['code'];
        //                 $game = $subItem['game'];
        //                 $name = $subItem['name'];
        //                 $server = $subItem['server'];
        //                 $status = $subItem['status'];
        //                 $price = $subItem['price']['basic'];
        //                 $existingRecord = GameList::where('code', $code)->first();
        //                 if (!$existingRecord) {
        //                     GameList::create([
        //                         'code' => $code,
        //                         'game' => $game,
        //                         'name' => $name,
        //                         'server' => $server,
        //                         'status' => $status,
        //                         'price' => $price * 1.5,
        //                     ]);
        //                 }
        //             }
        //         }
        // }
        // }
        $produk = Produk::all();
        return view('pages.Produk',compact('produk'));
    }

    public function Produkone($nama_produk)
    {
        $gamelist = GameList::where('game', $nama_produk)->get();
        $produk = Produk::where('nama_produk', $nama_produk)->get();
        // dd($produk);
        return view('pages.ProdukOne', compact('produk','gamelist'));
    }
}
