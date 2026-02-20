<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'          => 'required',
            'content'        => 'required',
            'type'           => 'required|in:sustainability,blog,press-release',
            'date'           => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required'         => 'Title is required',
            'content.required'       => 'Content is required',
            'type.required'          => 'Type is required',
            'type.in'                => 'Type must be one of the following: sustainability, blog, press-release',
            'date.required'          => 'Date is required',
        ];
    }
}