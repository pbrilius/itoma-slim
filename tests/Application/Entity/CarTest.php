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

namespace Tests\Application\Entity;

use App\Application\Entity\Car;
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
class CarTest extends TestCase
{
    /**
     * Usual entity SOLID case
     *
     * @return void
     */
    public function testEntityDependencyInjection()
    {
        $car = $this
            ->getMockBuilder(Car::class)
            ->disableOriginalConstructor()
            ->disableArgumentCloning()
            ->getMock();

        $this->assertIsObject($car);
        $this->assertObjectNotHasAttribute('id', $car);
    }
}
