<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleNhapSV extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'masv'=>['required','regex:/^PS\d{5}/'],
            'hoten'=>['required','min:3','max:20'],
            'tuoi'=>'required|integer|min:16|max:100',
            'ngaysinh'=>['required','regex:/\d{1,2}\/\d{1,2}\/\d{4}/'],
            'cmnd'=>'digits_between:9,10',
            'email'=>'email|ends_with:@fpt.edu.vn',
        ];
    }
    function messages()
    {
        return [
            'masv.required'=>'Mã Sinh Viên Không Được Trống',
            'masv.regex'=>'Mã Sinh Viên Phải Bắt Đầu Bằng PS và 5 Chữ Số',
            'hoten.required'=>'Họ Tên Không Được Trống',
            'hoten.min'=>'Họ Tên Phải Có Ít Nhất 3 Ký Tự',
            'hoten.max'=>'Họ Tên Không Được Quá 20 Ký Tự',
            'tuoi.required'=>'Tuổi Không Được Trống',
            'tuoi.integer'=>'Tuổi Phải Là Số',
            'tuoi.min'=>'Tuổi Phải Từ 16 Tuổi Trở Lên',
            'tuoi.max'=>'Tuổi Không Quá 100 Tuổi',
            'ngaysinh.required'=>'Ngày Sinh Không Được Trống',
            'ngaysinh.regex'=>'Ngày Sinh Phải Có Định Dạng dd/mm/yyyy',
            'cmnd.digits_between'=>'CMND Phải Có 9 Hoặc 10 Chữ Số',
            'email.email'=>'Email Không Đúng Định Dạng',
            'email.ends_with'=>'Email Phải Kết Thúc Bằng @fpt.edu.vn',
        ];
    }
    function attributes() {
        return [
            'masv'=>'Mã Sinh Viên',
            'hoten'=>'Họ Tên',
            'tuoi'=>'Tuổi',
            'ngaysinh'=>'Ngày Sinh',
            'cmnd'=>'CMND',
            'email'=>'Email',
        ];
    }
}
