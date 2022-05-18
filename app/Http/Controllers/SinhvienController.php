<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sinhvien;

class SinhvienController extends Controller
{
    public function show($id)
    {
    }
    public function index()
    {
        $sinhvien = Sinhvien::paginate(5);
        return view('index', compact('sinhvien'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        Sinhvien::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Thêm sinh viên thành công');
    }
    public function edit(Sinhvien $sinhvien)
    {
        return view('edit', compact('sinhvien'));
    }
    public function update(Request $request, Sinhvien $sinhvien)
    {
        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao', 'Cập nhật thành công');
    }
    public function destroy(Sinhvien $sinhvien)
    {
        $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('thongbao', 'Xóa sinh viên thành công');
    }
}