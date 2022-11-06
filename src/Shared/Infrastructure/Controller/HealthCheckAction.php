<?php

namespace App\Shared\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/health-check', name: 'health_check', methods: ['GET'])]
class HealthCheckAction
{
    /**
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        return new JsonResponse(['status' => 'ok']);
    }
}