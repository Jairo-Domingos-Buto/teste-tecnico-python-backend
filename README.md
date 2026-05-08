# Projeto Laravel - Teste Técnico Backend

API RESTful para gerenciamento de foco e produtividade.

## Requisitos

- PHP 8.4+
- Laravel 13
- Composer
- Banco de dados (SQLite ou outro)

## Instalação

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Rotas da API

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| POST | `/api/registrar-foco` | Registrar um foco |
| GET | `/api/diagnostico-produtividade` | Gerar diagnóstico |

## Executar Servidor

```bash
php artisan serve
```

## Testes

```bash
php artisan test
```