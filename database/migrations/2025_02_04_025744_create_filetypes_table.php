<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiletypesTable extends Migration
{
    public function up(): void
    {
        Schema::create('filetypes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('allowed_to');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('filetypes');
    }
}
