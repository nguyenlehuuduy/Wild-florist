<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonhangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhangs', function (Blueprint $table) {
            $table->id();
            $table->string('IDDH');
            $table->string('TenKH');
            $table->string('SDT');
            $table->string('DiaChi');
            $table->string('TenNB');
            $table->string('SoHieu');
            $table->date('NgayLamDonHang');
            $table->string('TenSP');
            $table->string('MaSP');
            $table->string('SoLuong');
            $table->string('TinhTrang');
            $table->string('GhiChu');
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
        Schema::dropIfExists('donhangs');
    }
}