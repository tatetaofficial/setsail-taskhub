<?php

namespace App\Services\AccelAI;

class KnowledgeLoader
{
    public static function load(array $files): string
    {
        $content = [];

        foreach ($files as $file) {
            $path = resource_path("ai/knowledge/{$file}.json");

            if (file_exists($path)) {
                $content[] = json_decode(file_get_contents($path), true);
            }
        }

        return json_encode($content, JSON_PRETTY_PRINT);
    }
}
