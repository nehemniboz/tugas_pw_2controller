<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function view($npm)
    {
        $nama = 'LORD_NEHEMIAALS KING OF ONE';
        $npm = 'G1A021007';
        


        return view('mahasiswa.view', compact('npm', 'nama'));
    }

}