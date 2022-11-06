<?php

namespace App\Users\Application\Query\FindUserByEmail;

use App\Shared\Application\Query\QueryInterface;

class FindUserByEmailQuery implements QueryInterface
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}