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
        $produit -> photo_produit ="fakeimg1.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = " ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg2.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg3.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg4.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg5.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg6.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg7.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg8.jpg";
        $produit -> save();

        $produit = new \App\ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "fakeimg9.jpg";
        $produit -> save();

    };
}
