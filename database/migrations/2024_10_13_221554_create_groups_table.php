<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('groupable_type');
            $table->unsignedBigInteger('groupable_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('groups');
    }
};
