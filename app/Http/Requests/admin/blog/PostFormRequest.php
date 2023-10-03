<?php

namespace App\Http\Requests\admin\blog;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            //
            "title" => ['required'],
            "contenu" =>["required"],
            "post_img" =>["required", "mimes:png,jpg"],
            "author"=>["required"],
            "date_pub" => ["required", "date"],
            "video" => ["required", "url"],
            'section_id' => 'required|exists:sections,id' ,
           

        ];
    }
}
