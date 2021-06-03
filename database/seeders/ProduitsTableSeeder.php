<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "uncaillou.jpg";
        $produit -> save();

    };
}
