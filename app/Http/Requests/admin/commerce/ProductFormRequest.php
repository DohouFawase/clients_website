<?php

namespace App\Http\Requests\admin\commerce;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            "product_name" => ['required', 'min:3'],
            "image" => ["required", "image", "mimes:png,jpg,svg,webp"], // Correction ici
            "stock" => ['required', "integer"],
            "price" => ['required', "numeric", "regex:/^\d*(\.\d{1,2})?$/"],
            "description" => ["required", "min:10"],
            "date" => ["required", "date"],
            "status" => ["required", 'boolean'],
            'category_id' => 'required|exists:categories,id'
        ]; 
        
    }
}
