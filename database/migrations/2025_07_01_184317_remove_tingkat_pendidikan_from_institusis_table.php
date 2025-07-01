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
        Schema::table('institusis', function (Blueprint $table) {
            $table->dropColumn('tingkat_pendidikan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('institusis', function (Blueprint $table) {
            $table->string('tingkat_pendidikan')->nullable();
        });
    }
};
