<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use input;

class RespondentsController extends Controller
{
    public function create()
    {
        return view('form1');
    }
    public function Save()
    {
        //ENREGISTREMENT D'UN STATUS DANS LA BASE
        $Status = Respondents ::create(['Status' = Input::get('oui')]);

    }
}
