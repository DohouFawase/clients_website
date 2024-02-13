<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class HeaderFormRequest extends FormRequest
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
            'carousel'=> ['required', "image",'mimes:png,jpg,svg,jpeg'],    
        ];
    }
}
