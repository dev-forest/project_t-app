<?php

namespace App\Users\Application\Command\CreateUser;

use App\Shared\Application\Command\CommandHandlerInterface;
use App\Users\Domain\Factory\UserFactory;
use App\Users\Infrastructure\Repository\UserRepository;

class CreateUserCommandHandler implements CommandHandlerInterface
{
    private UserRepository $userRepository;
    private UserFactory $userFactory;

    public function __construct(UserRepository $repository, UserFactory $userFactory)
    {
        $this->userRepository = $repository;
        $this->userFactory = $userFactory;
    }

    public function __invoke(CreateUserCommand $createUserCommand): string
    {
        $user = $this->userFactory->create($createUserCommand->getEmail(), $createUserCommand->getPassword());
        $this->userRepository->add($user);

        return $user->getId();
    }
}