<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Luong;

class LuongController extends Controller
{
    public function show($id)
    {
    }
    public function index()
    {
        $luong = Luong::paginate(100);
        return view('admin.table-data-money', compact('luong'))->with('i', (request()->input('page', 1) - 1) * 5);
        // return view('admin.table-data-table');
    }
    public function create()
    {
        return view('admin.form-add-tien-luong');
    }
    public function huybo()
    {
        return view('admin.table-data-money');
    }
    public function store(Request $request)
    {
        Luong::create($request->all());
        return redirect()->route('luong.index')->with('thongbao', 'Thêm lương thành công');
    }
    public function edit(Luong $luong)
    {
        return view('admin.edit-tien-luong', compact('luong'));
    }
    public function update(Request $request, Luong $luong)
    {
        $luong->update($request->all());
        return redirect()->route('luong.index')->with('thongbao', 'Cập nhật thành công');
    }
    public function destroy(Luong $luong)
    {
        $luong->delete();
        return redirect()->route('luong.index')->with('thongbao', 'Xóa lương thành công');
    }
}