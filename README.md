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
```

## TDD

```shell
./vendor/bin/phpunit
```
