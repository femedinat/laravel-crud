<?php

declare(strict_types=1);

namespace App\Infrastructure\Repositories;

use App\Models\User;
use App\Core\Entity\UserEntity;
use App\Core\Repositories\UserRepository;

class UserDatabaseRepository implements UserRepository
{
    public function getUserById(int $id): ?UserEntity
    {
        return User::where('id', $id)->first();
    }
}