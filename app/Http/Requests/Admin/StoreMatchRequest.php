<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreMatchRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'season_id' => ['required', 'exists:seasons,id'],
            'match_date' => ['required', 'date'],
            'salmon_goals' => ['nullable', 'integer', 'min:0'],
            'bleu_goals' => ['nullable', 'integer', 'min:0'],
            'lemon_goals' => ['nullable', 'integer', 'min:0'],
            'green_goals' => ['nullable', 'integer', 'min:0'],
            'player_of_match_id' => ['nullable', 'exists:players,id'],
        ];
    }
}
