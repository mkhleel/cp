<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Arr;

class APIRequest extends FormRequest
{
    /**
     * Get the proper failed validation response for the request.
     *
     * @param array $errors
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors): JsonResponse
    {
        $messages = implode(' ', Arr::flatten($errors));

        return response()->json([
            'success' => false,
            'message' => $messages,
        ], 400);
    }
}
