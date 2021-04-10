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

use App\Application\Entity\Segment;
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
class SegmentTest extends TestCase
{
    /**
     * Usual entity SOLID case
     *
     * @return void
     */
    public function testEntityDependencyInjection()
    {
        $segment = $this
            ->getMockBuilder(Segment::class)
            ->disableOriginalConstructor()
            ->disableArgumentCloning()
            ->getMock();

        $this->assertIsObject($segment);
        $this->assertObjectNotHasAttribute('id', $segment);
    }
}
