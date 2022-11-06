<?php

namespace App\Shared\Application\Command;

interface CommandBusInterface
{
    /**
     * @param \App\Shared\Application\Command\CommandInterface $command
     * @return mixed
     */
    public function execute(CommandInterface $command): mixed;
}