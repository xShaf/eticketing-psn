<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone_number' => ['required', 'string', 'numeric', 'max_digits:12'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'address_line' => ['required', 'string'],
            'postcode' => ['required', 'string', 'numeric', 'max_digits:5'],
            'city' => ['required', 'string'],
            'state' => ['required', 'string'],
            'avatar' => ['nullable', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }
}
