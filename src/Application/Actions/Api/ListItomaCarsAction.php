<?php
/**
 * PHP version 7
 * 
 * @category MVC
 * @package  Action
 * @author   Povials Brilius <pbrilius@gmail.com>
 * @license  cc-by-sa-4.0 https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
declare(strict_types=1);

namespace App\Application\Actions\Api;

use Slim\Psr7\Response;

/**
 * Cars listing
 * 
 * @category Distribution
 * @package  FormulatedCars
 * @author   Povilas Brilius <pbrilius@gmail.com>
 * @license  epl-2.0 https://docs.github.com/en/github/creating-cloning-and-archiving-repositories/licensing-a-repository
 * @link     pbgroupeu.wordpress.com
 */
class ListItomaCarsAction extends ApiAction
{
    /**
     * Inheritance
     * 
     * @inheritDoc
     *
     * @return Response
     */
    protected function action(): Response
    {
        $carManagementRepository = $this->carManagementRepository;
        $cars = $carManagementRepository->retrieveCarManagementPanel();
        
        $this->logger->info('Cars list was viewed');

        return $this->respondWithData($cars);
    }
}
