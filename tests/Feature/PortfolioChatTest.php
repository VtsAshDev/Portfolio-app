<?php

use App\Livewire\PortfolioChat;
use Livewire\Livewire;

it('renders successfully with initial bot greeting', function () {
    Livewire::test(PortfolioChat::class)
        ->assertStatus(200)
        ->assertSee('Olá! Sou o assistente virtual do Vitor Gomes.')
        ->assertSee('Vitor Gomes')
        ->assertSee('BACKEND ENGINEER')
        ->assertSee('Disponível CLT')
        ->assertSee('Keep Training (PWA)')
        ->assertSee('Pixel Chaos: Sabotage Arena (Multiplayer)');
});

it('responds to technologies questions', function () {
    Livewire::test(PortfolioChat::class)
        ->call('sendMessage', 'Tecnologias')
        ->assertSee('Minhas principais tecnologias e ferramentas são:')
        ->assertSee('Docker')
        ->assertSee('PostgreSQL');
});

it('responds to projects questions', function () {
    Livewire::test(PortfolioChat::class)
        ->call('sendMessage', 'Projetos')
        ->assertSee('Keep Training (PWA)')
        ->assertSee('Pixel Chaos: Sabotage Arena');
});

it('responds to hobbies questions', function () {
    Livewire::test(PortfolioChat::class)
        ->call('sendMessage', 'Hobbies')
        ->assertSee('Dark Souls II')
        ->assertSee('DIY');
});

it('responds to fallback questions', function () {
    Livewire::test(PortfolioChat::class)
        ->call('sendMessage', 'Qual é o sentido da vida?')
        ->assertSee('Não consegui identificar sua dúvida.');
});
