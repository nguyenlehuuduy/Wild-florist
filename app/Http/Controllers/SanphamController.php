<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;

class SanphamController extends Controller
{
    public function show($id)
    {
    }
    public function index()
    {
        $sanpham = Sanpham::paginate(100);
        return view('admin.table-data-product', compact('sanpham'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('admin.table-data-table');
    }
    public function create()
    {
        return view('admin.form-add-san-pham');
    }
    public function huybo()
    {
        return view('admin.table-data-product');
    }
    public function store(Request $request)
    {
        Sanpham::create($request->all());
        return redirect()->route('sanpham.index')->with('thongbao', 'Thêm sản phẩm thành công');
    }
    public function edit(Sanpham $sanpham)
    {
        return view('admin.edit-san-pham', compact('sanpham'));
    }
    public function update(Request $request, Sanpham $sanpham)
    {
        $sanpham->update($request->all());
        return redirect()->route('sanpham.index')->with('thongbao', 'Cập nhật thành công');
    }
    public function destroy(Sanpham $sanpham)
    {
        $sanpham->delete();
        return redirect()->route('sanpham.index')->with('thongbao', 'Xóa sản phẩm thành công');
    }
}