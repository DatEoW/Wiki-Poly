<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\password_reset_tokens;
class AccountController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function login_(){
        $credentials = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        if (\Auth::attempt($credentials)) {
            // nếu role = 1 thì vào admin nếu role = 0 thì vào home
            if(\Auth::user()->role == 0){
                return redirect('account')->with('thongbao','Đăng nhập thành công');
            }elseif(\Auth::user()->role == 1){
                return redirect('admin')->with('thongbao','Đăng nhập thành công');
            }
        }
        else{
            return redirect('login')->with('thongbao','Đăng nhập thất bại');
        }
    }
    public function register(){
        return view('admin.register');
    }
    public function register_(){
        $user = new \App\Models\User();
        if($_POST['password'] == $_POST['repassword']){
            $existingUser = \App\Models\User::where('email',$_POST['email'])->first();
            if ($existingUser) {
                return redirect('register')->with('thongbao', 'Email đã tồn tại trong hệ thống, vui lòng chọn email khác');
            };
        $user->name = $_POST['name'].' '.$_POST['lastname'];
        $user->email = $_POST['email'];
        $user->password = \Hash::make($_POST['password']);
        $user->save();
        return redirect('login')->with('thongbao','Đăng ký thành công');
        }
        else{
            return redirect('register')->with('thongbao','Mật khẩu không khớp');
        }
    }
    public function forgot_password(){
        return view('admin.forgot-password');
    }
    public function forgot_password_(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $status = Password::sendResetLink($request->only('email'));
    
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['thongbao' => 'Đã gửi liên kết đặt lại mật khẩu vào email của bạn!'])
            : back()->withErrors(['email' => __($status)]);
        
    }
    public function reset_password(Request $request){
        $token = bcrypt($request->token);
        dd($token);
        $email = $request->email;
        $password_reset_token = password_reset_tokens::where('email',$email)->first();
    }
}
