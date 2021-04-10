<?php

/**
 * PHP version 7
 * 
 * @category R&D
 * @package  MVC
 * @author   Povilas brilius <pbrilius@gmail.com>
 * @license  agpl-3.0 https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
declare(strict_types=1);

use App\Application\Actions\Action;
use Hateoas\Hateoas;

/**
 * API callbacks abstraction
 * 
 * @category College
 * @package  Assessment
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  lgpl https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
abstract class ApiAction extends Action
{
    /**
     * HATEOAS
     * 
     * @var Hateoas
     */
    protected $serializer;
}
