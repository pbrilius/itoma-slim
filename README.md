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

Issue `curl -LI localhost:8080/api/v1/itoma-cars`; you should see a list (*Postman* based) of requested
car management panels.

Don't get afraid - it's only headers issued - print the list by `curl -Li localhost:8080/api/v1/itoma-cars`.
