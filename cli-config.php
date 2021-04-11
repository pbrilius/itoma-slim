<?php

/**
 * PHP version 7
 * 
 * @category ORM
 * @package  Doctrine
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  cc0-1.0 https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
use Doctrine\ORM\Tools\Console\ConsoleRunner;

// replace with file to your own project bootstrap
require_once 'bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);
