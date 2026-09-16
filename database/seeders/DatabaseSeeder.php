<?php

namespace Database\Seeders;

use App\Models\Knowledge;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Knowledge::truncate();

        $records = [
            [
                'topic' => 'Perfil',
                'content' => 'Vitor Gomes, Desenvolvedor Backend Júnior (CLT).',
            ],
            [
                'topic' => 'Tecnologias',
                'content' => 'Trabalha com PHP, Symfony, Laravel, Livewire, Docker, PostgreSQL, SQLite. Utiliza ambiente Linux com i3wm.',
            ],
            [
                'topic' => 'Projetos',
                'content' => 'Desenvolve o "Keep Training" (PWA focado em dieta/musculação) e "Pixel Chaos: Sabotage Arena" (jogo multiplayer de pixel art).',
            ],
            [
                'topic' => 'Hobbies',
                'content' => 'Treinos de força, corrida, teoria musical, guitarra no iOS (com interface JOYO), jogos (Dark Souls II, main Sivir no LoL) e mecânica automotiva DIY (Peugeot 207).',
            ],
        ];

        foreach ($records as $record) {
            Knowledge::create($record);
        }
    }
}
