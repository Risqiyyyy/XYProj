<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.Register');
    }

    public function store(Request $request)
    {
        $response = Http::post('http://localhost:5000/users', [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'no_wa' => $request->no_wa,
            'pin' => $request->pin,
            'password' => $request->password,
            'referal' => $request->referal
        ]);
    
        if ($response->successful()) {
            $responseData = $response->json();
            return $responseData;
        } else {
            return $response->status();
        }
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
