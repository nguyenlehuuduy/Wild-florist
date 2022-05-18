<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    protected $fillable = [
        'MaSP',
        'TenSP',
        'SoLuong',
        'TinhTrang',
        'DanhMuc',
        'NhaCungCap',
        'GiaBan',
        'GiaVon',
        'MoTa',
    ];
}