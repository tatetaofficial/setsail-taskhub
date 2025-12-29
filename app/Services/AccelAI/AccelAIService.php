<?php

namespace App\Services\AccelAI;

use Illuminate\Support\Facades\Auth;
use App\Services\AccelAI\Prompts\CustomerServicePrompt;

class AccelAIService
{
    public function reply(string $message): string
    {
        if (!Auth::check()) {
            return $this->customerService($message);
        }

        return $this->agentService($message);
    }

    protected function customerService(string $message): string
    {
        if (IntentGuard::isBlocked($message)) {
            return "I can help with information about Setsail BizAccel programs, events, and registration.";
        }

        $knowledge = KnowledgeLoader::load([
            'about',
            'faq',
            'programs'
        ]);

        return GeminiClient::generate(
            CustomerServicePrompt::system(),
            $message,
            $knowledge
        );
    }


    protected function agentService(string $message): string
    {
        return "Agent mode coming next step.";
    }
}
