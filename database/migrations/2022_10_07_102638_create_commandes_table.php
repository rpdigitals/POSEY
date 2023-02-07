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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
           
            $table->string('etat');
            $table->string('lieu_du_travail');
            $table->string('note_explicative');
            $table->date('date_du_travail');
            $table->integer('statut')->default('1');
            // $table->unsignedBigInteger('prestataire_id');
            // $table->unsignedBigInteger('client_id');
            // $table->unsignedBigInteger('service_id');
            // $table->foreign('client_id')->references('id')->on('clients');
            // $table->foreign('service_id')->references('id')->on('services');
            // $table->foreign('prestataire_id')->references('id')->on('prestataires');
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('commandes');
    }
};
