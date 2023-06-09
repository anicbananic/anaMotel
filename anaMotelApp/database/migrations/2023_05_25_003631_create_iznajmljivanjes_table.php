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
        Schema::create('iznajmljivanjes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gost_id');
            $table->foreignId('soba_id');
            $table->string('datum_od');
            $table->string('datum_do');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iznajmljivanjes');
    }
};
