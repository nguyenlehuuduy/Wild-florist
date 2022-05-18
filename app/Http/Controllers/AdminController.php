<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

   public function index()
   {
      return view('admin_login');
   }

   public function show_dashboard()
   {
      return view('admin.dashboard');
   }

   public function dashboard()
   {
      return view('admin.dashboard');
   }

   public function form_add_bi_cam()
   {
      return view('admin.form-add-bi-cam');
   }

   public function form_add_don_hang()
   {
      return view('admin.form-add-don-hang');
   }

   public function form_add_nhan_vien()
   {
      return view('admin.form-add-nhan-vien');
   }
   public function form_add_tien_luong()
   {
      return view('admin.form-add-tien-luong');
   }
   public function page_calendar()
   {
      return view('admin.page-calendar');
   }
   public function form_add_san_pham()
   {
      return view('admin.form-add-san-pham');
   }
   public function phan_mem_ban_hang()
   {
      return view('admin.phan-mem-ban-hang');
   }
   public function quan_ly_bao_cao()
   {
      return view('admin.quan-ly-bao-cao');
   }
   public function table_data_banned()
   {
      return view('admin.table-data-banned');
   }
   public function table_data_money()
   {
      return view('admin.table-data-money');
   }
   public function table_data_oder()
   {
      return view('admin.table-data-oder');
   }
   public function table_data_product()
   {
      return view('admin.table-data-product');
   }
   public function table_data_table()
   {
      return view('admin.table-data-table');
   }

   public function form_add_khach_hang()
   {
      return view('admin.form-add-khach-hang');
   }
}