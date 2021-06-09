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
    public function Product(Request $request){
        $product = Produit::find($request->id);
        return view('shop/product',compact('product'));
        // dd($request -> id);
    }
    public function Category(){

        return view('shop/category',compact('category'));
    }
}
