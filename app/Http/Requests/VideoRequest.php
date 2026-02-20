<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'youtube_url' => 'nullable|url',
            'content'     => 'nullable',
            'title'       => 'nullable|max:255',
            'type'        => 'nullable|in:blog,press-release',
        ];
    }

    public function messages()
    {
        return [
            'youtube_url.url' => 'YouTube URL must be a valid URL',
            'type.in'         => 'Type must be one of the following: blog, press-release',
        ];
    }
}