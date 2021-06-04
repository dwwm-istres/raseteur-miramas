<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Controllers\Shop\ProductsController;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit ="téléchargement.jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = " ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(1).jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(2).jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(3).jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(4).jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(5).jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(6).jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(8).jpg";
        $produit -> save();

        $produit = new ProductsController();
        $produit -> nom_Produit = "Mug coucher de soleil";
        $produit -> description_produit = "Mug en ivore rare ";
        $produit -> prix_ht = 8.5;
        $produit -> photo_produit = "téléchargement(9).jpg";
        $produit -> save();

    }
}
