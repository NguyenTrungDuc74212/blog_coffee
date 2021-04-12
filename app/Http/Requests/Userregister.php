<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Userregister extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'name'=>'required',
           'address'=>'required',
           'email'=>'required',
           'password'=>'required|min:8',
        ];
    }
    public function messages()
    {
        return [
             'name.required'=>'Bạn phải nhập tên',
             'address.required'=>'Bạn phải nhập địa chỉ',
             'email.required'=>'Bạn phải nhập email',
             'password.required'=>'Bạn phải nhập pass',
             'password.min'=>'pass không hợp lệ',
        ];
    }
}
