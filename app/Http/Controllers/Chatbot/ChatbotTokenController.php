<?php

declare(strict_types=1);

namespace App\Http\Controllers\Chatbot;

use App\Http\Requests\Chatbot\ChatbotEmbedRequest;
use App\Support\Chatbot\ChatbotHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Livewire\Features\SupportScriptsAndAssets\SupportScriptsAndAssets;

class ChatbotTokenController
{
    public function __invoke(Request $request)
    {
        $token = ChatbotHelper::generateJWT($request->input('appKey'));

        if ( ! $token) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        return response()->json([
            'token' => $token,
        ]);
    }
}