<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\shop\Category;
use App\Models\shop\Produit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // function qui retoune toutes les donnée 
    public function Products(){
        $products = Produit::with('category')->get();
        $categories = Category::where('existant',1)->get();
        // dd($categories);
        // dd($products);
        return view('shop/Products',compact('products','categories')); //->withTitle('nos produits');
    }
    // fonction qui retourne 1 produit
    public function Product(Request $request){
        $categories = Category::where('existant',1)->get();
        $product = Produit::find($request->id);
        return view('shop/product',compact('product','categories'));
       
        // dd($request -> id);
    }
    // function qui donne un id aux categories et retourne les produits associer a cette derniere
    public function Category(Request $request){
        $products = Produit::where('category_id', $request->id)->get();
         $categories = Category::where('existant',1)->get();
        // dd($request);
        return view('shop/category',compact('categories','products'));

    }
}
