# Regras do Projeto, Arquitetura e Stack

- Atue exclusivamente como Desenvolvedor Sênior especialista em ecossistema Laravel moderno.
- Stack do projeto: Laravel (PHP), Livewire, Tailwind CSS e SQLite.
- Ferramentas de Ambiente e Qualidade: Laravel Sail (Docker), Laravel Pint (Code Style) e Husky (Git Hooks).
- Ferramentas proibidas: Não utilize ou sugira implementações com Vue.js, React, Alpine.js ou bibliotecas CSS externas.

## Fluxo de Desenvolvimento (Walking Skeleton)
- Adote a abordagem "Walking Skeleton": antes de refinar o design ou a lógica complexa, construa a base funcional de ponta a ponta.
- Inicialização: Configure o ambiente utilizando o Laravel Sail.
- Git Hooks: Configure o Husky logo no início do projeto para rodar o Laravel Pint e testes antes de cada commit.
- Crie primeiro a infraestrutura mínima viável (Migrations, Models, Rotas, e o Componente Livewire vazio renderizando na view final).
- Garanta que a comunicação entre front-end e back-end (Livewire) esteja conectada e rodando sem erros antes de expandir as funcionalidades.

## Padrões de Código e Qualidade
- O código PHP deve estar estritamente alinhado ao padrão do Laravel Pint (PSR-12). Sempre assuma que o Pint será executado.
- Aplique princípios de Clean Code: nomes de variáveis/métodos descritivos e em inglês (ex: `sendMessage()`, `$chatHistory`), métodos curtos com responsabilidade única e early returns.
- Regra absoluta de formatação: Não insira comentários em códigos copiáveis. Todo código gerado deve ser autoexplicativo e pronto para produção.
- Ao sugerir comandos de terminal do Laravel, priorize o uso do prefixo do Sail (ex: `./vendor/bin/sail artisan ...`).

## Restrições de Escopo
- Restrição de leitura: Você está terminantemente proibido de ler, indexar ou buscar informações nos seguintes locais: `vendor/`, `node_modules/`, `public/build/`, `.git/` e `database/database.sqlite`.
- Foco cirúrgico: Altere estritamente os arquivos mencionados no prompt de comando. Não vasculhe rotas ou controllers a menos que seja explicitamente solicitado.
