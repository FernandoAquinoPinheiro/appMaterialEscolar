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
        Schema::create('tbl_material_escolars', function (Blueprint $table) {
            $table->id('idMaterial');
            $table->string('nomeMaterial');
            $table->string('categoriaMaterial');
            $table->date('dataCompraMaterial');
            $table->decimal('preço',7,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_material_escolars');
    }
};
