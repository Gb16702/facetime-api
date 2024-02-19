<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

class WelcomeController
{
    public function Index(): JsonResponse
    {
        return response()->json(["message" => "Hit"]);
    }
}
