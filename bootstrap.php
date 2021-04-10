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

require_once dirname(__DIR__) . '/vendor/autoload.php';

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = getenv('MODE') === 'dev' ? true : false;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__ . "/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
//$config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
//$config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);
