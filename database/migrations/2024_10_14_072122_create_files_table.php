<?php

use App\Models\Files\FileType;
use App\Models\Registration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('format');
            $table->foreignIdFor(FileType::class, 'filetype_id');
            $table->foreignIdFor(Registration::class, 'registration_id');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
