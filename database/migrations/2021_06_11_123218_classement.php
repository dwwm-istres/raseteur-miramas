<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('classement', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
            $table->string("Nom Candidat");
            $table->string("Prénom");
            $table->string("Section");
            $table->float("Point");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('classement');
    }
}
