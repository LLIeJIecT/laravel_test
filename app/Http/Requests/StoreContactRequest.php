<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['requiered', 'string', 'max:20'],
            'title' => ['requiered', 'string', 'max:50'],
            'email' => ['requiered', 'email', 'max:255'],
            'url' => ['url', 'nullable'],
            'gender' => ['requiered', 'boolean'],
            'age' => ['requiered'],
            'contact' => ['requiered', 'string', 'max:200'],
            'caution' => ['requiered', 'accepted']
        ];
    }
}
