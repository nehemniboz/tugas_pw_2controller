<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Symfony\Component\String\b;

class BukuController extends Controller
{
    public function view($pemuja_santan)
    {
        $pemuja_santan= '1.pemujagadis, 2.pemujalanang, 3.pemujaduit';
        $namapenjual = '1.ABRAM, 2.RISKA, 3.NEHEM';
    

        return view('buku.baca', compact('pemuja_santan', 'namapenjual'));
    }
}
