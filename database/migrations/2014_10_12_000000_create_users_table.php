<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom',100);
            $table->string('prenom',100);
            $table->string('pseudo',100);
            $table->date('date_de_naissance');
            $table->string('adresse',255);
            $table->string('code postale',255);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->boolean('adherent');
            $table->boolean('licencier');
            $table->boolean('membre du bureau');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
