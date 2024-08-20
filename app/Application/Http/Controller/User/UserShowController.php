<?php

declare(strict_types=1);

namespace Application\Http\Controller\Admin\API\V1\User;

use Application\Http\Resource\UserResource;
use Application\Service\User\UserShow;

class UserShowController
{
    public function __invoke(int $user, UserShow $service)
    {
        return new UserResource($service->run($user));
    }
}
