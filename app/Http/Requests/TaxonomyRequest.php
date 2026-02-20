<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxonomyRequest extends FormRequest
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
        $rules = [
            'name' => 'required|string|max:255',
        ];

        // For submission_type, email_recipients is optional but must be array if present
        if (request()->route('type') === 'submission_type') {
            $rules['email_recipients'] = 'nullable|array';
            $rules['email_recipients.*'] = 'email';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Name/Title is required',
            'email_recipients.*.email' => 'Each email must be a valid email address',
        ];
    }
}

