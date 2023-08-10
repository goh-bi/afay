<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class patientcontroller extends Controller
{
    // patient
    // authentification
    // inscriptionpatient
    function inscriptionpatient(Request $request)
    {
        $nom = $request->nom;
        return "goh bi";
    }
    // connexion
    function connexion(Request $request)
    {
        return "connexion";
    }

}
