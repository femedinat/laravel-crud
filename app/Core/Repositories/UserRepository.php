<?php

declare(strict_types=1);

namespace App\Core\Repositories;

use App\Core\Entity\UserEntity;

interface UserRepository
{
    public function getUserById(int $id): ?UserEntity;
}