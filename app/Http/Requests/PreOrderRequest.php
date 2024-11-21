<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'                 => ['required', 'string', 'max:255'],
            'email'                => ['required', 'email', 'max:255'],
            'phone'                => ['required', 'string', 'max:20'],
            'company'              => ['nullable', 'string', 'max:255'],
            'siren'                => ['nullable', 'string', 'max:14'],
            'vat_number'           => ['nullable', 'string', 'max:50'],
            'goals'                => ['required', 'string'],
            'target_audience'      => ['required', 'string'],
            'content_available'    => ['nullable', 'in:yes,no,partially'],
            'preferred_style'      => ['nullable', 'string'],
            'reference_sites'      => ['nullable', 'string'],
            'special_requirements' => ['nullable', 'string'],
        ];
    }
}
