<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenoms");
            $table->string("ecole");
            $table->dateTime("dateDebut")->nullable();
            $table->dateTime("dateFin")->nullable();
            $table->foreignId("filiere_id")->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("stagiaires", function (Blueprint $table) {
            $table->dropConstrainedForeignId("filiere_id");
        });
        Schema::dropIfExists('stagiaires');
    }
};
