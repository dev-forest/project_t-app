<?php

namespace App\Users\Application\DTO;

use App\Users\Domain\Entity\User;

class UserDTO
{
    public string $id;
    public string $email;

    /**
     * @param string $id
     * @param string $email
     */
    public function __construct(string $id, string $email)
    {
        $this->$id = $id;
        $this->email = $email;
    }

    public static function fromEntity(User $user): self
    {
        return new self($user->getId(), $user->getEmail());
    }

}