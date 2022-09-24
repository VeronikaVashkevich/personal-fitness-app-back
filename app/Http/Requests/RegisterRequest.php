<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'height' => 'required|numeric|min:1|max:300',
            'weight' => 'required|numeric|min:0',
            'date_birth' => 'required|date',
            'password' => 'required',
            'sex' => 'required|in:male,female'
        ];
    }
}
