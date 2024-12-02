<?php

use App\Models\Block;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->boolean('municipality');
            $table->boolean('syndic');
            $table->json('councils');
            $table->foreignIdFor(Block::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
