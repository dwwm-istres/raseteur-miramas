<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Produit;
use Database\Seeders\ProductsTableSeeder;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Products(){
        $products = Produit::all();
        // dd($produits);
        return view('shop/Products',compact('products')); //->withTitle('nos produits');
    }
}
