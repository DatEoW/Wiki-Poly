<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MajorRequest extends FormRequest
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
            'name' => ['required','min:3', 'max:100','unique:mysql.major,name'],
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Vui lòng nhập ngành học!',
            'name.min' => 'Tên ngành học quá ngắn!',
            'name.max' => 'Tên ngành học quá dài!',
            'name.unique' => 'Tên ngành học đã có, vui lòng nhập tên mới!',
        ];
    }
}
