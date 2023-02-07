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
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('montant');
            $table->string('references');
            $table->integer('statut')->default('1');
            // $table->unsignedBigInteger('commande_id');
            // $table->foreign('commande_id')->references('id')->on('commandes');
            $table->foreignId('commande_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payements');
    }
};
