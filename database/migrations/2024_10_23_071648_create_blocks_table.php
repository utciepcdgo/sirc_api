<?php

use App\Models\Blocks\Assignment;
use App\Models\Entity;
use App\Models\Municipality;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('votes_obtained');
            $table->string('valid_vote_issued')->comment('Votación válida emitida');
            $table->float('rentability');
            $table->foreignIdFor(Municipality::class);
            $table->foreignIdFor(Entity::class);
            $table->foreignIdFor(Assignment::class)->nullable();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
