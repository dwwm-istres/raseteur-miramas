<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\Shop\ProductsController;
use App\Models\shop\Produit;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit ="téléchargement.jpg";
        // $produit->category_id = 1;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "mug en ivoire ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit ="téléchargement (1).jpg";
        // $produit->category_id = 2;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement (2).jpg";
        // $produit->category_id = 3;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement (3).jpg";
        // $produit->category_id = 4;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement (4).jpg";
        // $produit->category_id = 1;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement (5).jpg";
        // $produit->category_id = 2;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement (6).jpg";
        // $produit->category_id = 3;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement (8).jpg";
        // $produit->category_id = 4;
        $produit -> save();

        $produit = new Produit();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement (9).jpg";
        // $produit->category_id = 1;
        $produit -> save();

    }
}
// test pour les produits
