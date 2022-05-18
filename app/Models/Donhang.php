<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
    use HasFactory;
    protected $fillable = [
        'IDDH',
        'TenKH',
        'SDT',
        'DiaChi',
        'TenNB',
        'SoHieu',
        'NgayLamDonHang',
        'TenSP',
        'MaSP',
        'SoLuong',
        'TinhTrang',
        'GhiChu',
    ];
}