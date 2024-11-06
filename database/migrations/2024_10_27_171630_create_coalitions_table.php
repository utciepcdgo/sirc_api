<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('coalitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('acronym')->unique();
            $table->string('logo');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coalitions');
    }
};
