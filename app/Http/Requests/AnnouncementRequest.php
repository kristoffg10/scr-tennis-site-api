<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title'   => 'required|string',
            'content' => 'required|string',
            'date'    => 'required|date',
            'enabled' => 'nullable|in:0,1',
        ];
    }

    public function messages()
    {
        return [
            'title.required'   => 'Title is required.',
            'content.required' => 'Content is required.',
            'date.required'    => 'Date is required.',
            'date.date'        => 'Date must be a valid date.',
            'enabled.in'       => 'Enabled must be either 0 or 1.',
        ];
    }
}
