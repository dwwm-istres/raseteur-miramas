<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Products(){
        $produits = Produit::all();
        return view('shop/Products'); //->withTitle('nos produits');
    }
}
