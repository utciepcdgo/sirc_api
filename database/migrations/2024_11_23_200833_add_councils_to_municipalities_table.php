<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('municipalities', function (Blueprint $table) {
            $table->integer('councils');
        });

        // Add council_number to registrations table
        Schema::table('registrations', function (Blueprint $table) {
            $table->integer('council_number')
                ->nullable()
                ->after('voter_card')
                ->comment('Num. Regiduria');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('municipalities', function (Blueprint $table) {
            $table->dropColumn('councils');
        });

        // Drop council_number from registrations table
        Schema::table('registrations', function (Blueprint $table) {
            $table->dropColumn('council_number');
        });
    }
};
