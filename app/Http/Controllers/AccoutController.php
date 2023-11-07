<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Password;
class AccoutController extends Controller
{
    public function dangky(){
        return view('Accout/dangky');
    }
    public function dangky_(){
        $user = new \App\Models\User();
        if($_POST['password'] == $_POST['password2']){
            $existingUser = \App\Models\User::where('email',$_POST['email'])->first();
            if ($existingUser) {
                return redirect('/dangky')->with('thongbao', 'Email đã tồn tại trong hệ thống, vui lòng chọn email khác');
            };
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = \Hash::make($_POST['password']);
        $user->save();
        return redirect('/dangnhap')->with('thongbao','Đăng ký thành công');
        }
        else{
            return redirect('/dangky')->with('thongbao','Mật khẩu không khớp');
        }
    }
    public function dangnhap(){
        return view('Accout/dangnhap');
    }
    public function dangnhap_(){
        $credentials = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        if (\Auth::attempt($credentials)) {
            return redirect('/trangchu')->with('thongbao','Đăng nhập thành công');
        }
        else{
            return redirect('/dangnhap')->with('thongbao','Đăng nhập thất bại');
        }
    }
    public function quenmatkhau(){
        return view('Accout/quenmatkhau');
    }

    public function quenmatkhau_(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $status = Password::sendResetLink($request->only('email'));
    
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['thongbao' => 'Đã gửi liên kết đặt lại mật khẩu vào email của bạn!'])
            : back()->withErrors(['email' => __($status)]);
        
    }
}
