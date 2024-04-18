<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            Alert::error('Error', 'Email tidak terdaftar.');
            return redirect()->back();
        }
    
        if (!Hash::check($request->password, $user->password)) {
            Alert::error('Error', 'Password salah.');
            return redirect()->back();
        }

        if ($user->role === 'admin') {
            return redirect()->route('admin');
        } else {
            return redirect()->route('produk');
        }
    }
    

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        return response()->json(['message' => 'User successfully registered', 'user' => $user]);
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
