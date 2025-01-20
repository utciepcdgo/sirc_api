<?php

use App\Models\Migrants\Country;
use App\Models\Registration;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMigrantsTable extends Migration
{
    public function up(): void
    {
        Schema::create('migrants', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('zip_code');
            $table->foreignIdFor(Country::class);
            $table->foreignIdFor(Registration::class);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('migrants');
    }
}
