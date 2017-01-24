<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class login_request extends Request
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
            //
            "username"=>"required|min:5",
            "password"=>"required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/",
        ];
    }
        public function messages()
    {
        return [
            //
            'username.required'=>'Vui lòng nhập username',
            'username.min'=>'Username phải có ít nhất 5 ký tự',
            'password.required'=>'Vui lòng nhập Password',
            'password.min'=>'Password phải có ít nhất 6 ký tự',
            'password.regex'=>'Password phải có ít nhất 1 ký tự viết hoa, viết thường và số',
        ];
    }
}
