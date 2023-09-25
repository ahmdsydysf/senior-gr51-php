<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // dd($this);
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
            'username' => 'required|min:3|max:16|alpha_num',
            'email'  => ['required' , 'email' , 'ends_with:senior'],
            'password' => 'required|min:6|max:16'
        ];
    }

    public function attributes(): array
    {
        return [
            'password' => 'kalemat al ser',
        ];
    }

    public function messages(): array
    {
        return [
            'username.required' => 'برجاء كتابة اسم امسخدم',

        ];
    }
}
