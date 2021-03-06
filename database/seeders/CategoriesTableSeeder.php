<?php

namespace Database\Seeders;

use App\Models\shop\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->nom_categories = "accessoires";
        $category->existant = 1;
        $category->save();

        $category2 = new Category();
        $category2->nom_categories = "Matériel du raseteur";
        $category2->existant = 1;
        $category2->save();
        
        $category3 = new Category();
        $category3->nom_categories = "Pour nos supporter";
        $category3->existant = 1;
        $category3->save();

        $category4 = new Category();
        $category4->nom_categories = "Personnalisable";
        $category4->existant = 1;
        $category4->save();

    }
}
// test pour voir si nos categorie s'affiche convenablement 
