<?php

namespace App\Http\Requests\Exercises;

use App\Services\Service;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateExerciseRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'max:255',
            'muscle_group' => [Rule::in(array_keys(Service::MUSCLE_GROUPS))],
            'media' => 'sometimes|required|mimes:mp4,jpg,jpeg,gif,webp,png'
        ];
    }
}
