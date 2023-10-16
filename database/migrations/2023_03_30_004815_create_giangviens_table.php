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
        Schema::create('giangviens', function (Blueprint $table) {
            $table->string('magv')->primary();
            $table->string('tengv');
            $table->string('mabm');
            $table->string('khoa');
            $table->string('sdt');
            $table->string('maquyen');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
//7
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('giangviens');
    }
};
