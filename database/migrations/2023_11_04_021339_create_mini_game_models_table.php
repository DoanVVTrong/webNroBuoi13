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
        Schema::create('mini_game_models', function (Blueprint $table) {
            $table->id();
            $table->string('hinh_anh');
            $table->string('tieu_de');
            $table->string('so_lan_quay');
            $table->string('gia_cu');
            $table->string('gia_moi');
            $table->integer('tinh_trang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mini_game_models');
    }
};
