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
        Schema::table('movies', function (Blueprint $table) {
            $table->integer('domestic_box_office')->nullable();
            $table->integer('international_box_office')->nullable();
            $table->integer('worldwide_box_office')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropColumn(['domestic_box_office', 'international_box_office', 'worldwide_box_office']);
        });
    }
};
