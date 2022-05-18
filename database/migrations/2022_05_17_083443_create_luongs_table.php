<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luongs', function (Blueprint $table) {
            $table->id();
            $table->string('TenNV');
            $table->string('GioiTinh');
            $table->string('ChucVu');
            $table->string('TienLuong');
            $table->string('TruLuong');
            $table->string('TienThuong');
            $table->string('TongNhan');
            $table->string('TrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('luongs');
    }
}