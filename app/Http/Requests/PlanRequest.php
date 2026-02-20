<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'title'         => 'required',
            'type'          => 'required|in:group,individual',
            'subtitle'      => 'nullable|string',
            'description'   => 'nullable|string',

           
        ];
    }

    public function messages()
    {
        return [
            'title.required'        => 'Title is required',
            'type.required'         => 'Type is required',
            'type.in'               => 'Type must be either group or individual',
        ];
    }
}