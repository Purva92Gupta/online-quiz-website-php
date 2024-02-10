<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\UsernameRule;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'username' => [
                'sometimes', 
                new UsernameRule, 
                Rule::unique('users', 'username')->ignore($this->user)
            ],
            'password' => 'required|string|min:8',           
        ];
    }

    public function messages()
    {
        return [
            'username.required' => 'Username field is required',
            'password.required' => 'Password field is required',
            'password.string' => 'Password field must be a string',
            'password.min' => 'Password field must be at least :min characters long',
        ];
    }
}