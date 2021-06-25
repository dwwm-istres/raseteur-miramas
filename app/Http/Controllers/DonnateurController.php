<?php

namespace App\Http\Controllers;

use App\Models\Donnateur;
use Illuminate\Http\Request;

class DonnateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dons = Donnateur::all();
        return view('donnateur.index',compact('dons'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('donnateur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'price' => 'required',
        ]);
        $don = new Donnateur();
        $don->email = $request->email;
        $don->price = $request->price;
        $don->published_at = $request->published_at;

        $don->save();
        return redirect('/')->with('sucess','Don sending successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donnateur  $donnateur
     * @return \Illuminate\Http\Response
     */
    public function show(Donnateur $donnateur)
    {
        //
        return view('donnateur.show',compact('Donnateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donnateur  $donnateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Donnateur $donnateur)
    {
        //
        return view('donnateurs.edit',compact('donnateur'));
    }
}
