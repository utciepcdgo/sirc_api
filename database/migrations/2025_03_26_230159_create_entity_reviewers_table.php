<?php

use App\Models\Entity;
use App\Models\Reviewer;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityReviewersTable extends Migration
{
    public function up(): void
    {
        Schema::create('entity_reviewers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Reviewer::class)->constrained('reviewers');
            $table->foreignIdFor(Entity::class)->constrained('entities');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('entity_reviewers');
    }
}
