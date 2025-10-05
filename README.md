# Laravel Inertia Vue 3 Blog CRUD

> CRUD completo de posts de blog construído com Laravel, Inertia.js e Vue 3, DX moderna e uma base limpa para iniciar projetos SPA/SSR em Laravel.

## Tabela de Conteúdos

- [Badges](#badges)
- [Status do Projeto](#status-do-projeto)
- [Descrição](#descrição)
- [Features](#features)
- [Próximas melhorias](#próximas-melhorias)
- [Pré-requisitos](#pré-requisitos)
- [Instalação](#instalação)
- [Execução](#execução)
- [Licença](#licença)

## Badges

![Laravel](https://img.shields.io/badge/Laravel-12%2B-FF2D20.svg)
![PHP](https://img.shields.io/badge/PHP-8.4%2B-777BB4.svg)
![Vue.js](https://img.shields.io/badge/Vue.js-3-4FC08D.svg)
![Inertia.js](https://img.shields.io/badge/Inertia.js-%F0%9F%9A%80-6B46C1.svg)
![License](https://img.shields.io/badge/license-MIT-green.svg)

## Descrição

Este repositório implementa um CRUD de blog usando Laravel + Inertia.js + Vue 3. O objetivo é oferecer uma estrutura enxuta, com rotas server-driven e renderização client-side, eliminando APIs REST redundantes. A solução prioriza: rapidez de desenvolvimento, tipagem progressiva no front-end, e simplicidade de deploy.

SEO: Laravel Inertia Vue 3 CRUD Blog; Laravel SPA sem API; Vite; MySQL.

## Features

- CRUD de posts (criar, listar, editar, excluir)
- Validação de formulários lado servidor via Laravel
- Navegação SPA com Inertia.js (sem reimplementação de API)
- Componentização com Vue 3 (Composition API)
- Build moderno com Vite e HMR
- Padrões de organização e arquitetura prontos para escalar

## Próximas melhorias

- Fase 1 — UI com Tailwind
- Fase 2 — Autenticação e Políticas
- Fase 3 — Autor vinculado aos Posts
- Fase 4 — Melhorias nos Posts
- Fase 5 — Home e Descoberta
- Fase 6 — Admin/Editorial
- Fase 7 — Performance e SEO
- Fase 8 — Qualidade e CI/CD

## Pré-requisitos

- PHP >= 8.4
- Composer >= 2.x
- Node.js >= 22 e NPM ou PNPM
- Banco de dados MySQL/MariaDB (ou SQLite para desenvolvimento)
- Extensões PHP comuns ao Laravel (mbstring, openssl, pdo, tokenizer, xml, ctype, json)

Opcional (Windows): XAMPP para MySQL/Apache.

## Instalação

> Siga os passos abaixo para configurar o ambiente local. Os comandos funcionam em macOS, Linux e Windows (PowerShell).

```bash
# 1) Clonar o repositório
git clone https://github.com/fbcamargo/larablog.git
cd larablog

# 2) Copiar o arquivo de variáveis de ambiente
cp .env.example .env  # no Windows PowerShell: copy .env.example .env

# 3) Instalar dependências do PHP e do Front-end
composer install
npm install  # ou: pnpm install / yarn install

# 4) Gerar a APP_KEY
php artisan key:generate

# 5) Configurar o banco de dados no .env
DB_DATABASE=laravel_blog
DB_USERNAME=root
DB_PASSWORD=secret

#6) Rodar migrations
php artisan migrate
```

## Execução

```bash
# Iniciar servidor de desenvolvimento do Laravel
composer run dev  # http://127.0.0.1:8000
```

## Licença

Distribuído sob a licença MIT. Consulte o arquivo [`LICENSE`](LICENSE) para mais informações.
