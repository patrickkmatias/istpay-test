<?php

namespace App\Http\Requests\Job;

use App\Constants;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IndexJobRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'per_page' => ['numeric', 'nullable'],
            'type' => [Rule::in(Constants::JOB_TYPES), 'nullable'],
            'query' => ['string', 'min:3', 'nullable']
        ];
    }
}
