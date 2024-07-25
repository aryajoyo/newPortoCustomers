<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLibraryRequest extends FormRequest
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
            //
            'title' => ['required', 'string', 'max:255'],
            'thumbnail' => ['sometimes', 'image', 'mimes:png,jpg,jpeg'],
            'description' => ['required', 'string', 'max:65535'],
            'category' => ['required', 'string', 'max:255'],
        ];
    }
}