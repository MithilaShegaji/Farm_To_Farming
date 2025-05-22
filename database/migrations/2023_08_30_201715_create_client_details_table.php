<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('client_details', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email');
            $table->text('address');
            $table->text('address2')->nullable();
            $table->string('state');
            $table->string('district');
            $table->string('pincode');
            $table->string('dimmension');
            $table->string('longitude');
            $table->string('latitude');
            $table->binary('soilreport');
            $table->string('BhoomiLandId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_details');
    }
};
