<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EntityRepresentatives extends Migration
{
    public function up(): void
    {
        Schema::create('entity_representatives', function (Blueprint $table) {
            $table->foreignId('representative_id')->constrained();
            $table->foreignId('entity_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entity_representatives');
    }
}
