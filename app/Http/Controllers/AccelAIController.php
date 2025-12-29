<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccelAI\AccelAIService;

class AccelAIController extends Controller
{
    public function chat(Request $request, AccelAIService $ai)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $reply = $ai->reply($request->message);

        return response()->json([
            'reply' => $reply,
        ]);
    }
}
