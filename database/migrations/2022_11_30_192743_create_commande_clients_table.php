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
        Schema::create('commande_clients', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->string('nom');
            $table->string('lieu_du_travail');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->integer('statut');
            $table->string('date_du_travail');
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('categorie_id')->constrained()->onDelete('cascade');
            
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
        Schema::dropIfExists('commande_clients');
    }
};
