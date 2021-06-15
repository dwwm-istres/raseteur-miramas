<?php

namespace App\Http\Controllers\ecole_raseteur;

use App\Http\Controllers\Controller;
use App\Models\Ecole_raseteur\Classement;
use Illuminate\Http\Request;

class ClassementController extends Controller
{
    //retourne la vue Classement

    public function MakeClassement(){
        $classemnent = Classement::all();
        return view('ecole_raseteur/classement');
    } 

}
