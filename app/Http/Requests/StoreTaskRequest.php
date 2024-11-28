<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * set to true because no auth is required at the moment
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
            // request body

            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'is_completed' => 'boolean',
            'priority_id' => 'integer|exists:priorities,id'
        ];
    }

    public function attributes()
    {
        return [
            'priority_id' => 'priority'
        ];
    }
}
