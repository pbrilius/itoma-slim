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

namespace App\Application\Actions\Api;

use App\Application\Actions\Action;
use App\Application\Repository\CarManagementRepository;
use Psr\Log\LoggerInterface;

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
     * Car repository
     *
     * @var CarManagementRepository
     */
    protected $carManagementRepository;

    /**
     * Constructor
     *
     * @param CarManagementRepository $carManagementRepository Car Management Repository
     * @param LoggerInterface         $loggerInterface         Logger
     */
    public function __construct(
        CarManagementRepository $carManagementRepository,
        LoggerInterface $loggerInterface
    ) {
        parent::__construct($loggerInterface);
        $this->carManagementRepository = $carManagementRepository;
    }
}
