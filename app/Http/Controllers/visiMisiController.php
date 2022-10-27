<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_VisiMisi;
use App\Models\M_Profil;

class visiMisiController extends Controller
{
    function index()
    {
        $visi_misi = M_VisiMisi::select('*')->where('type', '=', 'aza')->get();
        $profile = M_Profil::select('*')->where('type', '=', 'aza')->get();

        return view('visi-misi.index', ['visi_misi' => $visi_misi[0], 'profile' => $profile[0]]);
        return view('footer.index', ['profile' => $profile[0]]);
    }
}
