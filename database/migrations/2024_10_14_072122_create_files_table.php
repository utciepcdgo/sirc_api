<?php

use Files\FileType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('format');
            $table->string('url');
            $table->foreignIdFor(FileType::class, 'filetype_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
