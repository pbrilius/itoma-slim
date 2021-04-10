<?php

/**
 * PHP version 7
 * 
 * @category Assessment
 * @package  Wifi
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  bsd-3-clause-clear https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository 
 * @link     https://pbgroupeu.wordpress.com
 */

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

require_once __DIR__ . '/vendor/autoload.php';

$paths = array(__DIR__ . '/src/Application/Entity');
$isDevMode = getenv('MODE') === 'DEV' ? true : false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => getenv('DATABASE_USER'),
    'password' => getenv('DAtaBASE_PASSWORD'),
    'dbname'   => getenv('DATABASE_NAME'),
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
