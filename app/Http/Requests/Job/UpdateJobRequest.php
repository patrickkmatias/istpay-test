<?php

namespace App\Http\Requests\Job;

use App\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateJobRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['string', 'max:225', 'nullable'],
            'description' => ['string', 'nullable'],
            'type' => [Rule::in(Constants::JOB_TYPES), 'nullable']
        ];
    }
}
