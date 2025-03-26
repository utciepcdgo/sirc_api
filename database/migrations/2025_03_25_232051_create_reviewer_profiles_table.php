<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewerProfilesTable extends Migration
{
    public function up(): void
    {
        Schema::create('reviewer_profiles', function (Blueprint $table) {
            $table->id();
            $table->enum('role', ['reviewer', 'super_reviewer'])->default('reviewer');
            $table->foreignIdFor(User::class)->constrained('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviewer_profiles');
    }
}
