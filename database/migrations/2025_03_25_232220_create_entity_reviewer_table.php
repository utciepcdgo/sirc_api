<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityReviewerTable extends Migration
{
    public function up(): void
    {
        Schema::create('entity_reviewer', function (Blueprint $table) {
            $table->id();

            $table->foreignId('reviewer_profile_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('entity_id');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entity_reviewer');
    }
}
