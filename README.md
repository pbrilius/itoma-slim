# Project development

## Installation

```shell
composer install
composer dump-autoload -o
```

## Running

```shell
cp -v .env.dist .env
./vendor/bin/doctrine orm:schema-tool:create
php ./bin/fixtures.php
```

## TDD

```shell
./vendor/bin/phpunit
```

## Serving


```shell
php -S localhost:8080 -t public public/index.php
```
