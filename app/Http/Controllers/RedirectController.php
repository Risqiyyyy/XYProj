<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function redirectToRoute($id)
    {
        switch ($id) {
            case 1:
                return redirect()->route('netflix');
                break;
            case 2:
                return redirect()->route('mobile-legends');
                break;
            // Tambahkan case untuk id lain jika diperlukan
            default:
                return redirect()->route('defaultRoute');
                break;
        }
    }
}
