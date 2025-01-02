<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminProfileUpdateRequest extends FormRequest
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

            'fullname'              => 'required|string|min:3|regex:/^[\pL\s]+$/u|max:30',
            'email'                 => 'required|email|unique:users,email',
            'image'                 => 'mimes:jpg,png | max:2048',
           
            
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
            'image.mimes'            => 'Image format must be jpg or png',
            'image.max'              => 'Image size can not be more then 2 MB',
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
