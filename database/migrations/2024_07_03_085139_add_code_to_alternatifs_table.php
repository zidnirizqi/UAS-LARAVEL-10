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
        Schema::table('alternatifs', function (Blueprint $table) {
            $table->string('nama_perusahaan');
            $table->string('C1');
            $table->string('C2');
            $table->string('C3');
            $table->string('C4');
            $table->string('C5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alternatifs', function (Blueprint $table) {
            //
        });
    }
};
