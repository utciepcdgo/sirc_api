<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntitySubscribes extends Migration
{
    public function up(): void
    {
        Schema::create('entity_subscribes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subscribe_id')->constrained();
            $table->foreignId('entity_id')->constrained();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('');
    }
}
