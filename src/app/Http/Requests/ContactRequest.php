<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "first_name" => "required",
            "last_name" => "required",
            "gender" => "required",
            "email" => "required|email",
            "tel_up" => "required",
            "tel_middle" => "required",
            "tel_down" => "required",
            "address" => "required",
            "category_id" => "required",
            "content" => "required|max:120",
        ];
    }

    public function messages()
    {
        return [
            "first_name.required" => "",
            "last_name.required" => "",
            "gender.required" => "",
            "email.required" => "",
            "email.email" => "",

        ];
    }
}
