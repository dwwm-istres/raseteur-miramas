<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
            $table->string(column: "nom_Produit");
            $table->text(column: "description_produit");
            $table->float(column: "prix_ht");
            $table->string(column: "photo_produit");
        });
    }
    // timestamps sert a dire quand l'article a ete cree 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produits');
    }
}
