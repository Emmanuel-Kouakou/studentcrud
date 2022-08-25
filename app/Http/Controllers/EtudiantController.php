<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function listerEtudiant()
    {
        $etudiant = 'KOUAKOU ULRICH';


        return view('pages/etudiant', compact('etudiant'));
    }
}
