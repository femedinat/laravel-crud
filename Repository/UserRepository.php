<?php

declare(strict_types=1);

namespace Core\Repositories;

use Core\Entities\UserEntity;

interface UserRepository
{
    public function getUserById(int $id): UserEntity;
}
