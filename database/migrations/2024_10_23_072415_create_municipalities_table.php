<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('shield')->nullable(); // Escudo (URL a imagen)
            $table->string('abbreviation');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};
