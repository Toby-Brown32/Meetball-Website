<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMatchPlayerStatsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'match_id' => ['required', 'integer', 'exists:matches,id'],
            'players' => ['required', 'array'],
            'selected' => ['required', 'array'],
            'selected.*' => ['integer', 'exists:players,id'],
        ];
    }
}
