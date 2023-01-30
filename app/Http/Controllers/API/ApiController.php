<?php

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;

/**
 * @OA\Server(url="/api")
 * @OA\Info(
 *   title="InfyOm Laravel Generator APIs",
 *   version="1.0.0"
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class ApiController extends Controller
{
    public function sendResponse($data, $message)
    {
        return response()->json([
            'success' => true,
            'data'    => $data,
            'message' => $message,
        ]);
    }

    public function sendError($message, $data = [], $code = 404)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    public function sendSuccess($message)
    {
        return response()->json([
            'success' => true,
            'message' => $message
        ], 200);
    }
}
