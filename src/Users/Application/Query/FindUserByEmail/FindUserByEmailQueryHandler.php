<?php

namespace App\Users\Application\Query\FindUserByEmail;

use App\Users\Application\DTO\UserDTO;
use App\Users\Domain\Repository\UserRepositoryInterface;

class FindUserByEmailQueryHandler implements \App\Shared\Application\Query\QueryHandlerInterface
{

    /**
     * @var \App\Users\Domain\Repository\UserRepositoryInterface
     */
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository,)
    {
        $this->userRepository = $userRepository;
    }

    public function __invoke(FindUserByEmailQuery $query): ?UserDTO
    {
        $user = $this->userRepository->findByEmail($query->getEmail());
        if (!$user) {
            return null;
        }
        return UserDTO::fromEntity($user);
    }
}