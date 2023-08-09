<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;


class StoreGuideRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
 
    public function rules(): array
    {
        return [
            'email' => ['required', 'email', 'unique:user_invitations,email'], 
        ];
    }

    public function messages(): array 
    {
        return [
            'email.unique' => 'Invitation with this email address already requested.'
        ];
    } 
}