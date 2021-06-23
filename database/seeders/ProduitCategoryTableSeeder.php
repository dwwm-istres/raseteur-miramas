<?php

namespace Database\Seeders;

use App\Models\shop\CategoryProduit;
use App\Models\shop\Category;
use App\Models\shop\Produit;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        for($i=0; $i<10; $i++) {

            DB::table('category_produit')->insert([ 
                'category_id' => Category::inRandomOrder()->first()->id,
                'produit_id' =>  Produit::inRandomOrder()->first()->id,

            ]);


    }}
}
