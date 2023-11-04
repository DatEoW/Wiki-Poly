<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MajorChildRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required','min:3', 'max:100','unique:mysql.major_child,name'],
            'majorP' =>['required'],
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập chuyên ngành học!',
            'name.min' => 'Tên chuyên ngành học quá ngắn!',
            'name.max' => 'Tên chuyên ngành học quá dài!',
            'name.unique' => 'Tên chuyên ngành học đã có, vui lòng nhập tên mới!',
            'majorP.required' => 'Vui lòng chọn ngành học!',
        ];
    }
}
