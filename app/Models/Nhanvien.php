<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhanvien extends Model
{
    use HasFactory;
    protected $fillable = [
        'IDNV',
        'HoTen',
        'Email',
        'DiaChi',
        'SoDienThoai',
        'NgaySinh',
        'NoiSinh',
        'SoCMND',
        'NgayCap',
        'NoiCap',
        'GioiTinh',
        'ChucVu',
        'BangCap',
        'TinhTrangHonNhan',
    ];
}