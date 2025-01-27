<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuscribedsTable extends Migration
{
    public function up(): void
    {
        Schema::create('suscribeds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ownership');
            $table->foreignId('entity_id');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suscribeds');
    }
}
