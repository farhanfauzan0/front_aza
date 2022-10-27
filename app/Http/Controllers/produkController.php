<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Produk;
use App\Models\M_Profil;

class produkController extends Controller
{
    function index()
    {
        $profile = M_Profil::select('*')->where('type', '=', 'aza')->get();
        $product = M_Produk::select('*')->where('type', '=', 'aza')->get();

        return view('produk.index', ['profile' => $profile[0], 'product' => $product]);
        return view('footer.index', ['profile' => $profile[0]]);
    }
}
