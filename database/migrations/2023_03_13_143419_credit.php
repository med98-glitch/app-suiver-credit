<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('typecredits');
            $table->String('montant');
            $table->String('period');
            $table->String('telephone');
            $table->string('email');
            $table->String('Informations')->nullable();
            $table->String('statu')->nullable();
            $table->String('observation')->nullable();
            $table->string('responsable');
           //$table->foreign('id_responsable')->references('id')->on('responsables')->onUpdate('cascade')->onDelete('RESTRICT'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credits');
    }
};
