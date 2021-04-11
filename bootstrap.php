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
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = new Dotenv();
$dotenv->load(__DIR__ . '/.env');

$paths = array(__DIR__ . '/config/xml');
$isDevMode = $_SERVER['MODE'] === 'DEV' ? true : false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => $_SERVER['DATABASE_USER'],
    'password' => $_SERVER['DATABASE_PASSWORD'],
    'dbname'   => $_SERVER['DATABASE_NAME'],
    'host' => '127.0.0.1',
    'port' => 3306,
);

$config = Setup::createXMLMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);
