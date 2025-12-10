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
        Schema::create('tb_komoditas_name', function (Blueprint $table) {
            $table->string('komoditas_kode');
            $table->string('komoditas_name');

            $table->timestamp('created_on')->nullable();
            $table->string('created_by')->nullable();

            $table->timestamp('updated_on')->nullable();
            $table->integer('updated_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_komoditas_name');
    }
};
