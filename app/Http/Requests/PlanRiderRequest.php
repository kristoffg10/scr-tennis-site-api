<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanRiderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'title'         => 'required|string|max:255',
            'plan_id'       => 'required|uuid|exists:plans,id',
        ];
    }

    public function messages()
    {
        return [
        'title.required'       => 'Title is required',
        'plan_id.required'     => 'Plan is required',
        'plan_id.uuid'         => 'Plan ID must be a valid UUID',
        'plan_id.exists'       => 'Selected plan does not exist',
    ];
    }

    /**
     * Prepare the data for validation.
     *
     * Pull the plan_id from the route so validation
     * works for both create and (future) update calls.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'plan_id' => $this->route('plan_id') ?? $this->plan_id,
        ]);
    }
}