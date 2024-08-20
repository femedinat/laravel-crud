<?php

declare(strict_types=1);

namespace Infrastructure\Repositories;

use App\Models\User;
use Core\Entities\UserEntity;
use Core\Repositories\UserRepository;

class UserDatabaseRepository implements UserRepository
{
    public function getUserById(int $id): UserEntity
    {
        return User::findOrFail($id);
    }
}
