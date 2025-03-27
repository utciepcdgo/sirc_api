<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewersTable extends Migration
{
    public function up(): void
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->id();
            $table->enum('role', ['REVIEWER', 'SUPERVISOR'])->default('reviewer');
            $table->foreignIdFor(User::class)->constrained('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviewers');
    }
}
