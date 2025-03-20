<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubstitutionsTable extends Migration
{
    public function up(): void
    {
        Schema::create('substitutions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name');
            $table->string('second_name');
            $table->json('birthplace');
            $table->json('residence');
            $table->string('occupation');
            $table->string('voter_key');
            $table->string('curp');
            $table->json('voter_card');
            $table->string('reelection');
            $table->string('mote')->nullable();

            // Relationships
            $table->foreignId('block_id');
            $table->foreignId('position_id');
            $table->foreignId('postulation_id');
            $table->foreignId('sex_id');
            $table->foreignId('gender_id');
            $table->foreignId('compensatory_id');
            $table->foreignId('registration_id');
            // Status
            $table->enum('status', ['FORMALLY_PRESENTED', 'AWAITING_PRESENTATION', 'SUBSTITUTED'])->default('AWAITING_PRESENTATION');
            // Timestamps
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('substitutions');
    }
}
