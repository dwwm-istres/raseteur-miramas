<?php

namespace App\Http\Controllers\ContactController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function Contact()
    {
    return view('contact/Contact');
    }
}
