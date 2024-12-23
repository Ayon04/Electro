<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminSignupRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'fullname'              => 'required|string|min:3|regex:/^[\pL\s]+$/u|max:30',
            'email'                 => 'required|email|unique:admins,email',
            'password'              => 'required|confirmed|alpha_num|min:6|max:15',
            'password_confirmation' => 'required'

        ];
    }

    public function messages(){
        return [
            'fullname.required'      => 'Name is required',
            'fullname.alpha'         => 'Name must be alphabetic',
            'fullname.max'           => 'Name cannot be more than 30 characters',
            'email.required'         => 'Email is required!',
            'email.email'            => 'Email format is incorrect',
            'email.unique'           => 'Email already exists',
            'password.required'      => 'Password is required!',
            'password.max'           => 'Password cannot be more than 15 characters',
            'password.min'           => 'Password must be at least 6 characters',
            'password.alpha_num'     => 'Password must be a combination of alphabets and numbers',
            're-password.required'   => 'Retyped password is required',

        ];
    }

    /**
     *
     *
     * @return array
     */
    public function filters()
    {
        return [
            'email' => 'trim|lowercase',
            'name'  => 'trim|capitalize|escape'

        ];
    }
}
