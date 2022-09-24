<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercises\CreateExerciseRequest;
use App\Http\Requests\Exercises\UpdateExerciseRequest;
use App\Http\Resources\ExerciseResource;
use App\Models\Exercise;
use App\Services\ExerciseService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return $this->sendJsonResponse([
            'data' => ExerciseResource::collection(Exercise::all())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateExerciseRequest $request)
    {
        $service = new ExerciseService();
        $exercise = $service->saveExercise($request->validated());

        return $this->sendJsonResponse([
            'data' => [
                'exercise_id' => $exercise->id,
                'message' => Lang::get('messages.exercise_created')
            ]
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Exercise $exercise)
    {
        return $this->sendJsonResponse([
            'data' => $exercise
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateExerciseRequest $request, Exercise $exercise)
    {
        $exercise->update($request->validated());

        return $this->sendJsonResponse([
            'data' => $exercise
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exercise  $exercise
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Exercise $exercise)
    {
        $exercise->delete();

        return $this->sendJsonResponse([
            'data' => [
                'message' => Lang::get('messages.exercise_deleted'),
            ]
        ]);
    }
}
