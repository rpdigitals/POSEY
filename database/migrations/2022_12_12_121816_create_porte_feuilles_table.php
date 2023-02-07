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
        Schema::create('porte_feuilles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('valeur');
            $table->integer('dernier_ajout');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('porte_feuilles');
    }
};
