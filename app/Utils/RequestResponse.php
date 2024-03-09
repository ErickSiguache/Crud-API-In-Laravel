<?php

namespace App\Utils;

use Illuminate\Http\JsonResponse;

class RequestResponse {
    public static function response_200(string $message, object | array $data): JsonResponse {
        return response()->json([
            "status" => true,
            "message" => $message,
            "data" => $data,
        ], 200);
    }

    public static function response_201(string $message): JsonResponse {
        return response()->json([
            "status" => true,
            "message" => $message,
        ], 201);
    }

    public static function response_404(string $message): JsonResponse {
        return response()->json([
            "status" => false,
            "message" => $message,
        ], 404);
    }
}