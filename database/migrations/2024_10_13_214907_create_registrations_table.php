<?php

declare(strict_types=1);

use App\Models\Block;
use App\Models\Registrations\Compensatory;
use App\Models\Registrations\Gender;
use App\Models\Registrations\Position;
use App\Models\Registrations\Postulation;
use App\Models\Registrations\Sex;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->string('name');
            $table->string('first_name');
            $table->string('second_name');
            $table->json('birthplace')->comment('Lugar y fecha de nacimiento');
            $table->json('residence')->comment('Dirección y tiempo de residencia');
            $table->string('occupation');
            $table->string('voter_key')->comment('Clave de Elector');
            $table->string('curp');
            $table->json('voter_card');
            $table->string('reelection');
            $table->string('mote')->nullable();
            // Relationships
            $table->foreignIdFor(Block::class);
            $table->foreignIdFor(Position::class);
            $table->foreignIdFor(Postulation::class);
            $table->foreignIdFor(Sex::class);
            $table->foreignIdFor(Gender::class)->default(12); // No especificado | Ninguno;
            $table->foreignIdFor(Compensatory::class);
            // Status
            $table->enum('status', [
                'FORMALLY_PRESENTED',
                'AWAITING_PRESENTATION',
                'SUBSTITUTED',
                'APPROVED',
                'REJECTED',
            ])->default('AWAITING_PRESENTATION');
            // Timestamps
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
