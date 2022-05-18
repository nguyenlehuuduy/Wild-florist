<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
   public function login()
   {
      return view('admin_login');
   }
   public function register()
   {
      return view("auth.register");
   }
   public function registerUser(Request $request)
   {
      $request->validate([
         'name' => 'required',
         'email' => 'required|email',
         'password' => 'required|min:5|max:12'
      ]);
      $user = new User();
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $res = $user->save();
      if ($res) {
         return back()->with('success', 'You have registered successfully');
      } else {
         return back()->with('fail', 'Something Wrong');
      }
   }
   public function loginUser(Request $request)
   {
      $request->validate([
         'email' => 'required|email',
         'password' => 'required|min:5|max:12'
      ]);
      $user = User::where('email', '=', $request->email)->first();
      if ($user) {
         if (Hash::check($request->password, $user->password)) {
            $request->session()->put('loginID', $user->id);
            return redirect('dashboard');
         } else {
            return back()->with('fail', 'Password not matches.');
         }
      } else {
         return back()->with('fail', 'This email is not registered');
      }
   }
   public function dashboard1()
   {

      $data = array();
      if (Session::has('loginID')) {
         $data = User::where('id', '=', Session::get('loginID'))->first();
      }
      return "dashboard";
   }
   public function logout()
   {
      if (Session::has('loginID')) {
         Session::pull('loginID');
         return redirect('login');
      }
   }
}