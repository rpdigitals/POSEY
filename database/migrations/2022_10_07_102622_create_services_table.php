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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom');
            $table->integer('prix');
            $table->string('image');
            $table->string('cree_par');
            $table->string('description');
            $table->integer('statut')->default('1');
            // $table->unsignedBigInteger('categorie_id');
            // $table->unsignedBigInteger('prestataire_id');
            // $table->foreign('categorie_id')->references('id')->on('categories');
            // $table->foreign('prestataire_id')->references('id')->on('prestataires');
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
            $table->foreignId('prestataire_id')->constrained()->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
