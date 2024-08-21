<?php

declare(strict_types=1);

namespace App\Application\Http\Controller\User;

use App\Http\Resource\UserResource;
use App\Service\UserShow;

class UserShowController
{
    public function __invoke(int $user, UserShow $service)
    {
        $user = new UserResource($service->run($user));

        if (empty($user->id)) {
            return response()->json([
                "data" => [
                    "status" => false,
                    "message" => "Driver does not exists"
                ]
            ], 200);
        }

        return $user;
    }
}
