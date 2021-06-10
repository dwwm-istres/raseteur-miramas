<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\shop\Category;
use App\Models\shop\Produit;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function Products(){
        $products = Produit::all();
        $categories = Category::where('existant',1)->get();
        //  dd($products);
        return view('shop/Products',compact('products','categories')); //->withTitle('nos produits');
    }
    public function Product(Request $request){
        $categories = Category::where('existant',1)->get();
        $product = Produit::find($request->id);
        return view('shop/product',compact('product','categories'));
       
        // dd($request -> id);
    }
    public function Category(){
        $products = Produit::all();
        $categories = Category::where('existant',1)->get();
        // dd($categories);
        return view('shop/category',compact('categories','products'));

    }
}
