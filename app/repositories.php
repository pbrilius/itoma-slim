<?php
declare(strict_types=1);

use App\Application\Entity\CarManagement;
use App\Application\Repository\CarManagementRepository;
use App\Domain\User\UserRepository;
use App\Infrastructure\Persistence\User\InMemoryUserRepository;
use DI\ContainerBuilder;
use Doctrine\ORM\EntityManager;
use Psr\Container\ContainerInterface;

return function (ContainerBuilder $containerBuilder) {
    // Here we map our UserRepository interface to its in memory implementation
    $containerBuilder->addDefinitions([
        UserRepository::class => \DI\autowire(InMemoryUserRepository::class),
        CarManagementRepository::class => function (ContainerInterface $containerInterface) {
            $entityManager = $containerInterface->get(EntityManager::class);
            return $entityManager->getRepository(CarManagement::class);
        }
    ]);
};
