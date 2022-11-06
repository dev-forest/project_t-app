<?php

declare(strict_types=1);

namespace App\Users\Domain\Entity;

use App\Users\Infrastructure\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity(repositoryClass: UserRepository::class)]
#[Table(name: 'users_user')]
class User
{
    #[Id, Column(type: Types::INTEGER), GeneratedValue(strategy: 'AUTO')]
    private string $id;
    #[Column(type: Types::STRING, length: 55, unique: true, nullable: false)]
    private string $email;
    #[Column(type: Types::STRING, length: 15, unique: false, nullable: false)]
    private string $password;

    /**
     * @param string $email
     * @param string $password
     */
    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }


}