<?php

namespace App\Http\Controllers;

use App\Ai\Agents\WriterAgent;
use Illuminate\Http\Request;
use Laravel\Ai\Enums\Lab;

class AiWriteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);
        $prompt = "write complete post about $request->message";

        return WriterAgent::make()->stream(prompt: $prompt,
            provider: Lab::Groq,
            model: 'openai/gpt-oss-20b', );
    }
}
