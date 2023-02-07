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
        Schema::create('info_abonnements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('date_abonnement');
            $table->date('fin_abonnement');
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
        Schema::dropIfExists('info_abonnements');
    }
};
