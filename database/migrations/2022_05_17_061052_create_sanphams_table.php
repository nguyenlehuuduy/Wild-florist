<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphams', function (Blueprint $table) {
            $table->id();
            $table->string('MaSP');
            $table->string('TenSP');
            $table->string('SoLuong');
            $table->string('TinhTrang');
            $table->string('DanhMuc');
            $table->string('NhaCungCap');
            $table->string('GiaBan');
            $table->string('GiaVon');
            $table->string('MoTa');
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
        Schema::dropIfExists('sanphams');
    }
}