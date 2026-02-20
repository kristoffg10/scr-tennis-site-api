<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
        'title'             => 'required|string',
        'department'        => 'required|string',
        'arrangement'       => 'required|string',
        'address'           => 'required|string',
        'benefits'          => 'required|string',
        'responsibilities'  => 'required|string',
        'qualifications'    => 'required|string',
        'date'              => 'nullable|date',
        'enabled'           => 'nullable|in:0,1',
    ];
    }

    public function messages()
    {
        return [
        'title.required'            => 'Title is required.',
        'department.required'       => 'Department is required.',
        'arrangement.required'      => 'Arrangement is required.',
        'address.required'          => 'Address is required.',
        'benefits.required'         => 'Benefits are required.',
        'responsibilities.required' => 'Responsibilities are required.',
        'qualifications.required'   => 'Qualifications are required.',
        'enabled.in'                => 'Enabled must be either 0 or 1.',
    ];
    }
}
