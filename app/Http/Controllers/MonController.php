<?php

namespace App\Http\Controllers;

use App\Models\lain;
use Illuminate\Http\Request;

class MonController extends Controller
{
    public function acceuil ()
    {
        return view('home');
    }


    public function remplirFormulaire()
    {
        return view('form1');
    }

    public function inscrire()
    {
        return view('enregistrer');
    }

}
