<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
            'name'           => 'required',
            'specialization' => 'required',
            'clinic'         => 'required',
            'location'       => 'required',
            'address'        => 'required',
            'address_link'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'           => 'Name is required',
            'specialization.required' => 'Specialization is required',
            'clinic.required'         => 'Clinic is required',
            'location.required'       => 'Location is required',
            'address.required'        => 'Address is required',
            'address_link.required'   => 'Address link is required',
        ];
    }
}