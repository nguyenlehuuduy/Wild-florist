<?php

namespace App\Http\Controllers;

use App\Models\Nhanvien;
use Illuminate\Http\Request;

class NhanvienController extends Controller
{
    public function show($id)
    {
    }
    public function index()
    {
        $nhanvien = Nhanvien::paginate(100);
        return view('admin.table-data-table1', compact('nhanvien'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('admin.table-data-table');
    }
    public function create()
    {
        return view('admin.form-add-nhan-vien');
    }
    public function huybo()
    {
        return view('admin.table-data-table1');
    }
    public function store(Request $request)
    {
        Nhanvien::create($request->all());
        return redirect()->route('nhanvien.index')->with('thongbao', 'Thêm sinh viên thành công');
    }
    public function edit(Nhanvien $nhanvien)
    {
        return view('admin.edit-nhan-vien', compact('nhanvien'));
    }
    public function update(Request $request, Nhanvien $nhanvien)
    {
        $nhanvien->update($request->all());
        return redirect()->route('nhanvien.index')->with('thongbao', 'Cập nhật thành công');
    }
    public function destroy(Nhanvien $nhanvien)
    {
        $nhanvien->delete();
        return redirect()->route('nhanvien.index')->with('thongbao', 'Xóa sinh viên thành công');
    }
}