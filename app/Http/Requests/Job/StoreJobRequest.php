<?php

namespace App\Http\Requests\Job;

use App\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJobRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:225'],
            'description' => ['string', 'nullable'],
            'type' => [Rule::in(Constants::JOB_TYPES)]
        ];
    }
}
