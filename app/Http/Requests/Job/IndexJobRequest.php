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
            'query' => ['string', 'min:3', 'nullable'],
            'paused' => ['boolean', 'nullable']
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'paused' => $this->paused === 'null' ? null : filter_var($this->paused, FILTER_VALIDATE_BOOLEAN)
        ]);
    }

    /**
     * Handle a passed validation attempt, 
     * filling fields that weren't passed 
     * with default values.
     */
    protected function passedValidation(): void
    {
        $data = [
            'per_page' => 10,
            'paused' => null,
            'type' => null,
            'query' => null,
        ];

        foreach ($data as $key => $value) {
            if (!$this->filled($key)) {
                $this[$key] = null;
            }
        }
    }
}