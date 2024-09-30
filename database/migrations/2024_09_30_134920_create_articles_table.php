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
        Schema::create('articles', function (Blueprint $table) {//inseriamo le caratteristiche uguali a quelle del nostro modello per creare le caratteristiche che vogliamo passare nella tabella, questo perché la tabella e il modello si parlano
            $table->id();
            $table->string("titolo");
            $table->string("genere");
            $table->text("trama");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
