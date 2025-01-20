<?php

declare(strict_types=1);

use App\Models\Coalition;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('acronym')->unique();
            $table->string('logo');
            $table->foreignIdFor(Coalition::class)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parties');
    }
};
