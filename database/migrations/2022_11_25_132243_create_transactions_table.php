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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('etat');
            $table->integer('montant');
            $table->string('numero_de_transaction');
            $table->string('systeme_de_payement');
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->foreignId('prestataire_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('transactions');
    }
};
