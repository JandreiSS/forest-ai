# Desenvolvimento

## Comandos básicos para executar o projeto usando Docker

- cp .env.example .env (para criar o arquivo de ambiente)
- docker-compose up -d (sobe os containers)
- npm install (dependências)
- docker-compose exec app bash (acessar o container)

Dentro do container (/var/www)

- composer install (dependências)
- php artisan key:generate (cria a chave de aplicação para seu ambiente)
- php artisan migrate (executa as migrations)
- php artisan db:seed
- php artisan storage:link (link entre a pasta storage e public, para tornar acessível o conteúdo armazenado em storage)
- exit (sair do container)

Após sair do container
- npm run dev (para que o vite fique monitorando alterações no projeto)