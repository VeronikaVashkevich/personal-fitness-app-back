<?php


namespace App\Services;


use App\Models\Exercise;
use Illuminate\Support\Facades\Auth;

class ExerciseService extends Service
{
    public function saveExercise($data)
    {
        $exercise = Exercise::query()->create($data);

        if (!Auth::user()->is_admin) {
            $exercise->user_id = Auth::id();
            $exercise->save();
        }

        return $exercise;
    }
}
