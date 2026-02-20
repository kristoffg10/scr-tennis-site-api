<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'           => 'required|string|max:255',
            'content'         => 'nullable|string',
            'date'            => 'required|date',
            'location'        => 'nullable|string|max:255',
            'event_type'      => 'nullable|string|max:50',
            'enabled'         => 'nullable|in:0,1',
            // Tennis-specific
            'match_type'      => 'nullable|string|in:singles,doubles,mixed',
            'format'          => 'nullable|string|in:round_robin,knockout,ladder,timed_play',
            'scoring_format'  => 'nullable|string|max:255',
            // Host & management
            'assigned_coach'  => 'nullable|string|max:255',
            'event_status'    => 'nullable|string|in:draft,published,cancelled,completed',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required.',
            'date.required'   => 'Event date is required.',
            'date.date'       => 'Date must be a valid date.',
            'enabled.in'      => 'Enabled must be either 0 or 1.',
        ];
    }
}
