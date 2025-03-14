<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTartaRequest extends FormRequest
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
            "nombre"=>"required|string|min:3|max:25",
            "precio"=>"required|numeric|min:0.01|max:999.99",
            "imagen"=>"string|nullable",
            "color"=>"string|nullable|min:4|max:7",
            "ingredientes"=>"required|string|min:3|max:2500",
            "alergenos"=>"boolean",
        ];
    }
}
