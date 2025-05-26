<?php

namespace App\Http\Requests\Administration\Company;

use App\Http\Requests\BaseFormRequest;

class UpdateCompanyRequest extends BaseFormRequest
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
            'name_update' => 'required|string|max:255',
            'email_update' => 'required|email',
            'website_update' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name_update.required' => 'The name field is required.',
            'email_update.required' => 'The email field is required.',
            'website_update.required' => 'The website field is required',
        ];
    }

}
