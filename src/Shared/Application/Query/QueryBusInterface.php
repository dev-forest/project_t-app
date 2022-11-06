<?php

namespace App\Shared\Application\Query;

interface QueryBusInterface
{
    /**
     * @param \App\Shared\Application\Query\QueryInterface $query
     * @return mixed
     */
    public function execute(QueryInterface $query): mixed;
}