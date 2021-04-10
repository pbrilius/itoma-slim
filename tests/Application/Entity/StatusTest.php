<?php

/**
 * PHP version 7
 * 
 * @category TDD
 * @package  DDR3
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  gpl https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
declare(strict_types=1);

use App\Application\Entity\Status;
use Tests\TestCase;

/**
 * User entity TDD
 * 
 * @category Shipping
 * @package  GrandPiao
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  isc https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
class StatusTest extends TestCase
{
    /**
     * Usual entity SOLID case
     *
     * @return void
     */
    public function testEntityDependencyInjection()
    {
        $status = $this
            ->getMockBuilder(Status::class)
            ->disableOriginalConstructor()
            ->disableArgumentCloning()
            ->getMock();

        $this->assertIsObject($status);
        $this->assertObjectNotHasAttribute('id', $status);
    }
}
