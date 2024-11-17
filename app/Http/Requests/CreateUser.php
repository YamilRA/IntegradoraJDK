<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUser extends FormRequest
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
            'person_id' =>'required',
            'username' =>'required',
            'password' =>'required',
            'email' =>'required',
            'recovery_email' =>'required',
            'recovery_token' =>'required',
            'token_expiration' =>'required',
            'active' =>'required',
        ];
    }
}
