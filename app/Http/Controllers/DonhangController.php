<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donhang;

class DonhangController extends Controller
{
    public function show($id)
    {
    }
    public function index()
    {
        $donhang = Donhang::paginate(100);
        return view('admin.table-data-oder', compact('donhang'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('admin.table-data-table');
    }
    public function create()
    {
        return view('admin.form-add-don-hang');
    }
    public function huybo()
    {
        return view('admin.table-data-oder');
    }
    public function store(Request $request)
    {
        Donhang::create($request->all());
        return redirect()->route('donhang.index')->with('thongbao', 'Thêm đơn hàng thành công');
    }
    public function edit(Donhang $donhang)
    {
        return view('admin.edit-don-hang', compact('donhang'));
    }
    public function update(Request $request, Donhang $donhang)
    {
        $donhang->update($request->all());
        return redirect()->route('donhang.index')->with('thongbao', 'Cập nhật thành công');
    }
    public function destroy(Donhang $donhang)
    {
        $donhang->delete();
        return redirect()->route('donhang.index')->with('thongbao', 'Xóa đơn hàng thành công');
    }
}