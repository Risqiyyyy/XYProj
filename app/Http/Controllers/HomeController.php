<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // $key = env('VIP_RESELLER_API_KEY');
        // $sign = env('VIP_RESELLER_API_SIGN');
    
        // $response = Http::asForm()->post('https://vip-reseller.co.id/api/game-feature', [
        //     'key' => $key,
        //     'sign' => $sign,
        //     'type' => 'services',
        //     'filter_status' => 'available'
        // ]);
    
        // $data = $response->json();
        // if (is_array($data)) {
            
        //     if (isset($data['result']) && isset($data['data'])) {
        //         if ($data['result'] === true) {
        //             $firstFourData = array_slice($data['data'], 0, 4);
        //             return view('Home', ['firstFourData' => $firstFourData]);
        //         } else {
        //             return redirect()->back()->with('error', 'Permintaan gagal: ' . $data['message']);
        //         }
        //     } else {
        //         return redirect()->back()->with('error', 'Indeks respons tidak valid.');
        //     }
        // } else {
        //     return redirect()->back()->with('error', 'Respons tidak valid.');
        // }
        return view('Home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
