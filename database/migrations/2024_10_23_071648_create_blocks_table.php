<?php

use App\Models\Coalition;
use App\Models\Entity;
use App\Models\Municipality;
use App\Models\Party;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('votes_obtained');
            $table->string('valid_vote_issued')->comment('Votación válida emitida');
            $table->float('rentability');
            $table->foreignIdFor(Municipality::class);
            $table->foreignIdFor(Entity::class);
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blocks');
    }
};
