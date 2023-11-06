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
        Schema::create('ngoc_rong_models', function (Blueprint $table) {
            $table->id();
            $table->string('hinh_anh');
            $table->string('tieu_de');
            $table->string('gia_cu');
            $table->string('gia_moi');
            $table->string('so_tai_khoan');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngoc_rong_models');
    }
};
