<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\shop\Produit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Products(){
        $products = Produit::all();
        //  dd($products);
        return view('shop/Products',compact('products')); //->withTitle('nos produits');
    }
}
