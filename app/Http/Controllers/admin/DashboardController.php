<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $key = env('VIP_RESELLER_API_KEY');
        $sign = env('VIP_RESELLER_API_SIGN');
    
        $response = Http::asForm()->post('https://vip-reseller.co.id/api/profile', [
            'key' => $key,
            'sign' => $sign
        ]);
        $data = $response->json();
        return view('admin.Dashboard', compact('data'));
    }
}
