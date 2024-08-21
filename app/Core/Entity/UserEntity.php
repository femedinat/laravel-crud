<?php

declare(strict_types=1);

namespace App\Core\Entity;

use Core\ValueObject\EmailValueObject;
use Core\ValueObject\HashedPasswordValueObject;
use Core\ValueObject\PasswordValueObject;

interface UserEntity
{
    public function getId(): int;

    public function getName(): string;

    public function setName(string $name): self;

    public function getEmail(): EmailValueObject;

    public function setEmail(EmailValueObject $email): self;

    public function getPassword(): ?HashedPasswordValueObject;

    public function setPassword(PasswordValueObject $password): self;
}
