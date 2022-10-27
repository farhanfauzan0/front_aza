<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Profil;
use App\Models\M_Produk;

class homeController extends Controller
{
    function index()
    {
        $profile = M_Profil::select('*')->where('type', '=', 'aza')->get();
        $product = M_Produk::select('*')->where('type', '=', 'aza')->get();

        return view('home.index', ['profile' => $profile[0], 'product' => $product]);
        return view('footer.index', ['profile' => $profile[0]]);
    }
}
