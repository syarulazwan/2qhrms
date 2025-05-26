<?php

namespace App\Http\Requests\Administration\Company;

use App\Http\Requests\BaseFormRequest;

class CompanyRequest extends BaseFormRequest
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
    
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'website' => 'required',
            'logo' => 'required|image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'website.required' => 'The website field is required',
            'logo.required' => 'The logo field is required.',
            'logo.image' => 'The logo must be an image.',
            'logo.max' => 'The logo may not be greater than 2MB.',
        ];
    }

}
