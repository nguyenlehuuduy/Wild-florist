<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanviens', function (Blueprint $table) {
            $table->id();
            $table->string('IDNV');
            $table->string('HoTen');
            $table->string('Email');
            $table->string('DiaChi');
            $table->string('SoDienThoai');
            $table->date('NgaySinh');
            $table->string('NoiSinh');
            $table->string('SoCMND');
            $table->date('NgayCap');
            $table->string('NoiCap');
            $table->string('GioiTinh');
            $table->string('ChucVu');
            $table->string('BangCap');
            $table->string('TinhTrangHonNhan');
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
        Schema::dropIfExists('nhanviens');
    }
}