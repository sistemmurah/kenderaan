<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KadNamaController extends Controller
{
    public function senaraiKadNama()
    {
        return view('pages.staf.kadNamaStaf.senaraiKadNama');
    }

    public function tambahKadNama()
    {
        return view('pages.staf.kadNamaStaf.tambahKadNama');
    }

    public function pemohonKadNama()
    {
        return view('pages.urusetia.kadNamaUrusetia.pemohonKadNama');
    }

    public function kemaskiniKadNama()
    {
        return view('pages.urusetia.kadNamaUrusetia.kemaskiniKadNama');
    }
 
}