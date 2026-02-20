<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaderRequest extends FormRequest
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
            'name'              => 'required',
            'position'          => 'required',
            'type'              => 'required|in:director,management,others',
            'biography'         => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'         => 'Name is required',
            'position.required'     => 'Position is required',
            'type.required'         => 'Type is required',
            'type.in'               => 'Type must be one of the following: director, management, others',
        ];
    }
}