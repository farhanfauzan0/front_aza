<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_Profil;

class katalogController extends Controller
{
    function index()
    {
        $profile = M_Profil::select('*')->where('type', '=', 'aza')->get();

        return view('katalog.index', ['profile' => $profile[0]]);
        return view('footer.index', ['profile' => $profile[0]]);
    }
}
