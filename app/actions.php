<?php

declare(strict_types=1);

use App\Application\Actions\Api\ListItomaCarsAction;
use DI\ContainerBuilder;

use function DI\autowire;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions(
        [
            ListItomaCarsAction::class => autowire(ListItomaCarsAction::class),
        ]
    );
};
