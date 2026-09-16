# Comportamento do Agente e Economia de Tokens

## Processamento de Imagens e Ferramentas
- Proibição de Scripts de Visão: NUNCA crie, sugira ou execute scripts (Python, Bash, etc.) para tentar ler, converter (ex: para .ppm) ou extrair pixels de arquivos de imagem, PDF ou mídia.
- Processamento Visual: Utilize EXCLUSIVAMENTE a sua capacidade nativa de visão da LLM para interpretar imagens de design fornecidas.

## Economia de Contexto e Comunicação
- Respostas Diretas: Oculte explicações prolixas, introduções ou conclusões amigáveis. Vá direto ao ponto.
- Saída de Código: Entregue apenas os blocos de código completos e prontos para substituição nos arquivos.
- Tratamento de Erros: Se o usuário reportar um erro, foque apenas em entregar o trecho de código corrigido. Não gere textos longos explicando o motivo da falha.
- Iteração: Ao construir o "Walking Skeleton", entregue os comandos de configuração (Sail, Husky, Pint) e os códigos de forma incremental. Aguarde a validação antes de gerar o código da próxima etapa.
