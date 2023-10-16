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
        Schema::create('phieudexuats', function (Blueprint $table) {
            $table->bigInteger('madx')->unsigned();
            $table->string('magv');
            $table->date('ngayduyet');
            $table->string('muctieu');
            $table->string('yeucau');
            $table->string('tailieutk');
            $table->string('tinhtrang');
            $table->string('noidungkhac');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('phieudexuats');
    }
};
