<?php

/**
 * PHP version 7
 * 
 * @category MVC
 * @package  CLI
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  gpl https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
declare(strict_types=1);

namespace App\Application\Command;

use Doctrine\ORM\EntityManager;
use League\CLImate\CLImate;
use Nelmio\Alice\Loader\NativeLoader;

/**
 * Hal Life 2 reworked - Black Mesa
 * 
 * @category Simulation
 * @package  StarWars
 * @author   Povials Brilius <pbrilius@gmail.com>
 * @license  gpl https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
class Fixtures
{
    /**
     * Entity manager
     *
     * @var EntityManager
     */
    private $_entityManager;

    /**
     * Constructordefault
     *
     * @param EntityManager $entityManager Entity Manager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->_entityManager = $entityManager;
    }
    /**
     * Invocation
     *
     * @return void
     */
    public function __invoke()
    {
        $climate = new CLImate();
        $climate->out('Generating fixtures...');

        $loader = new NativeLoader();
        $objectSet = $loader->loadFile(__DIR__ . '/../../../fixtures.yml');

        $climate->shout('Loaded ' . sizeof($objectSet->getObjects()) . ' simulated objects.');

        $climate->whisper('Persisting objects to database  - akin entities...');

        $entityManager = $this->_entityManager;
        foreach ($objectSet->getObjects() as $key => $value) {
            $entityManager->persist($value);
            $entityManager->flush($value);
        }

        $climate->info('Persisted.');

    }
}
