<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientStoreRequest extends FormRequest
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
            'username' => [
                'required',
                'string',
                'max:255',
                'regex:/^[a-z]+$/', // Hanya huruf kecil tanpa spasi, angka, atau karakter khusus
                Rule::unique(User::class),
            ],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'password' => [
                'required',
                'string',
                'min:8', // minimal 8 karakter
                'confirmed', // harus ada konfirmasi password
                'regex:/[a-z]/', // minimal satu huruf kecil
                'regex:/[A-Z]/', // minimal satu huruf besar
                'regex:/[0-9]/', // minimal satu angka
            ],
        ];
    }

    /**
     * Custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'username.regex' => 'Username hanya boleh berisi huruf kecil tanpa spasi, angka, atau karakter khusus.',
            'password.regex' => 'Password harus mengandung huruf besar, huruf kecil dan angka.',
        ];
    }
}
