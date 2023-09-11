<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cubazul;

class About extends Controller
{
    public function senaraiKadNama()
    {
        return view('cuba');
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
    public function edit(Request $request, $id)
    {
        echo $id;   
        // return view('urusetia.add-edit', compact('edit', 'booking', 'type', 'pengguna'));
    }
    public function senaraiPeranan()
    {
        $listperanan = cubazul::latest() ->paginate();			   
        return view('senaraiPeranan', compact('listperanan'));        
    }
}