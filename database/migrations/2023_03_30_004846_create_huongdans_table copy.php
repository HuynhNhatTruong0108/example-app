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
        Schema::create('huongdans', function (Blueprint $table) {
            $table->string('magv');
            $table->string('masv');
            $table->string('nienkhoa');
            $table->date('ngaybd');
            $table->date('ngaykt');
            $table->string('madt');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huongdans');
    }
};
