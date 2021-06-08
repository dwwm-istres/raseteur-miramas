<?php

namespace App\Http\Controllers\Ecole_raseteur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AproposController extends Controller { 
   public function Apropos() {
      return view('ecole_raseteur/apropos');
   } 
}
