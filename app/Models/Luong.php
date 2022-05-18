<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luong extends Model
{
    use HasFactory;
    protected $fillable = [
        'TenNV',
        'GioiTinh',
        'ChucVu',
        'TienLuong',
        'TruLuong',
        'TienThuong',
        'TongNhan',
        'TrangThai',
    ];
}