<?php

namespace App\Application\Repository;

use App\Application\Entity\Car;
use App\Application\Entity\CarManagement;
use App\Application\Entity\User;

/**
 * CarManagementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CarManagementRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * Panel retrieval
     *
     * @return void
     */
    public function retrieveCarManagementPanel()
    {
        $queryBuilder = $this->createQueryBuilder('q');
        $queryBuilder
            ->select(CarManagement::class)
            ->innerJoin(Car::class, 'c')
            ->innerJoin(User::class, 'u');

        return $queryBuilder->getQuery()->getArrayResult();
    }
}