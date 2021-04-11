<?php

/**
 * PHP version 7
 * 
 * @category TDD
 * @package  DDR3
 * @author   Povilas Brilius <pbrilius@gmail.com> 
 * @license  mit https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */

declare(strict_types=1);

namespace Tests\Application\Actions\Api;

use App\Application\Actions\ActionPayload;
use App\Application\Entity\Car;
use App\Application\ResponseEmitter\CarRepository;
use Tests\TestCase;

/**
 * Listing iToma cars
 * 
 * @category ORM
 * @package  MVC
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  mit https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
class ListItomaCarsActionTest extends TestCase
{
    /**
     * Action HTTP
     *
     * @return void
     */
    public function testAction()
    {
        $app = $this->getAppInstance();

        /**
         * Container
         * 
         * @var Container $container
         */
        $container = $app->getContainer();
        $car = new Car();
        $car->setCarNumber('LTK 256');
        $car->setModel('Mazda');
        $car->setYearMade('2006');

        $carRepositoryProphecy = $this->prophesize(CarRepository::class);
        $carRepositoryProphecy
            ->findAll()
            ->willReturn([$car])
            ->shouldBeCalledOnce();

        $container->set(CarRepository::class, $carRepositoryProphecy->reveal());

        $request = $this->createRequest(
            'GET',
            '/api/' . getenv('VERSION') . '/itoma-cars'
        );
        $response = $app->handle($request);

        $payload = (string) $response->getBody();
        $expectedPayload = new ActionPayload(200, [$car]);
        $serializedPayload = json_encode($expectedPayload, JSON_PRETTY_PRINT);

        $this->assertEquals($serializedPayload, $payload);
    }
}
