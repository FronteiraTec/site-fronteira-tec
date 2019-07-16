# site-fronteira-tec

## Sobre
Site com painel administrativo da FronteiraTec

Esse site foi desenvolvido utilizando [Laravel](https://laravel.com/).

## Instalação
Instale a dependência utilizando [Composer](https://getcomposer.org/):
```
composer install

```
Copie o arquivo de configurações exemplo (`.env.example`) para o arquivo `.env` e faça as configurações necessarias.

```bash
cp .env.example .env
```

Define a chave de criptografia:
```
php artisan key:generate
```

Inicie a aplicação:
```
php artisan serve
```
