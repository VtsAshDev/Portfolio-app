<?php

namespace App\Livewire;

use App\Models\Knowledge;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PortfolioChat extends Component
{
    public array $messages = [];

    public string $messageInput = '';

    public function mount(): void
    {
        $this->messages = [
            [
                'sender' => 'bot',
                'text' => 'Olá! Sou o assistente virtual do Vitor Gomes. Fique à vontade para me perguntar sobre tecnologias, projetos, carreira ou hobbies!',
            ],
        ];
    }

    public function sendMessage(?string $content = null): void
    {
        $text = trim($content ?? $this->messageInput);

        if ($text === '') {
            return;
        }

        $this->messages[] = [
            'sender' => 'user',
            'text' => $text,
        ];

        if ($content === null) {
            $this->messageInput = '';
        }

        $knowledgeContext = Knowledge::all()
            ->map(fn (Knowledge $item): string => "{$item->topic}: {$item->content}")
            ->implode("\n");

        $apiKey = env('OPENAI_API_KEY');

        $response = Http::withToken($apiKey)
            ->timeout(30)
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-4o-mini',
                'messages' => [
                    [
                        'role' => 'system',
                        'content' => "Você é o assistente virtual do Vitor Gomes. Responda às perguntas exclusivamente com base no seguinte contexto sobre ele:\n\n{$knowledgeContext}\n\nCaso o assunto não esteja presente no contexto, informe de maneira educada que não possui essa informação.",
                    ],
                    [
                        'role' => 'user',
                        'content' => $text,
                    ],
                ],
            ]);

        $botReply = $response->json('choices.0.message.content')
            ?? 'Desculpe, não foi possível obter uma resposta no momento. Verifique a configuração da chave OPENAI_API_KEY.';

        $this->messages[] = [
            'sender' => 'bot',
            'text' => $botReply,
        ];
    }

    public function render(): View
    {
        return view('livewire.portfolio-chat');
    }
}
