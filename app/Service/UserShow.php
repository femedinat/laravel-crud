<?php

declare(strict_types=1);

namespace App\Service;

use App\Core\Entity\UserEntity;
use App\Core\Repositories\UserRepository;

class UserShow
{
    public function __construct(
        private UserRepository $repository
    ) {}

    public function run(int $id): ?UserEntity
    {
        return $this->repository->getUserById($id);
    }
}