<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listeMediaController extends Controller
{
    public function getListeMedias() {
        return view('homeco');
    }
    //
}
