<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
   public function rules()
    {
        return [
            'lastname'          => 'required',
            'firstname'         => 'required',
            'middle_initial'    => 'nullable|string|max:3|regex:/^[A-Za-z]+$/',
            'license_type'      => 'required',
            'license_id'        => 'required',
            'effectivity'       => 'required',
            'expiry'            => 'required',
        ];
    }

    public function messages()
    {
        return [
            'lastname.required'         => 'Last name is required',
            'firstname.required'        => 'First name is required',
            'middle_initial.regex'      => 'Middle initial must contain only letters',
            'middle_initial.max'        => 'Middle initial may not be greater than 3 characters',
            'license_type.required'     => 'License type is required',
            'license_id.required'       => 'License ID is required',
            'effectivity.required'      => 'Effectivity date is required',
            'expiry.required'           => 'Expiry date is required',
        ];
    }
}
