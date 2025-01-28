<?php

use App\Models\Entity;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribesTable extends Migration
{
    public function up(): void
    {
        Schema::create('subscribes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ownership');
            $table->foreignIdFor(Entity::class);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscribeds');
    }
}
