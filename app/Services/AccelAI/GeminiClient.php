<?php

namespace App\Services\AccelAI;

use Illuminate\Support\Facades\Http;

class GeminiClient
{
    public static function generate(string $systemPrompt, string $userMessage, string $knowledge = null): string
    {
        $apiKey = config('services.gemini.key');
        $model  = config('services.gemini.model');

        $contents = [];

        // SYSTEM PROMPT
        $contents[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $systemPrompt]
            ]
        ];

        // KNOWLEDGE CONTEXT
        if ($knowledge) {
            $contents[] = [
                'role' => 'user',
                'parts' => [
                    ['text' => "Context Information:\n{$knowledge}"]
                ]
            ];
        }

        // USER MESSAGE
        $contents[] = [
            'role' => 'user',
            'parts' => [
                ['text' => $userMessage]
            ]
        ];

        $response = Http::post(
            "https://generativelanguage.googleapis.com/v1beta/{$model}:generateContent?key={$apiKey}",
            [
                'contents' => $contents,
                'generationConfig' => [
                    'temperature' => 0.3,
                    'topP' => 0.9,
                    'maxOutputTokens' => 500,
                ],
            ]
        );

        if (!$response->successful()) {
            return "Sorry, the AI service is temporarily unavailable.";
        }

        return data_get(
            $response->json(),
            'candidates.0.content.parts.0.text',
            'No response generated.'
        );
    }
}
