<?php

declare(strict_types=1);

use App\Models\Block;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name');
            $table->string('second_name');
            $table->json('birthplace')->comment('Lugar y fecha de nacimiento');
            $table->json('address_length_residence')->comment('Dirección y tiempo de residencia');
            $table->string('occupation');
            $table->string('voter_key')->comment('Clave de Elector');
            $table->string('curp');
            $table->json('voter_card');
            // Relationship with block Model
            $table->foreignIdFor(Block::class);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
};
