<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSharedEntityIdToBlocksTable extends Migration
{
    public function up(): void
    {
        Schema::table('blocks', function (Blueprint $table) {
            $table->unsignedBigInteger('shared_entity_id')->nullable();
            $table->foreign('shared_entity_id')->references('id')->on('entities');
        });
    }

    public function down(): void
    {
        Schema::table('blocks', function (Blueprint $table) {});
    }
}
