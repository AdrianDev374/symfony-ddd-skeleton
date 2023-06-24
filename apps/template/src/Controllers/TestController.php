<?php

declare(strict_types=1);

namespace AdrianDev374\Apps\Template\Controllers;

use Symfony\Component\HttpFoundation\JsonResponse;

final class TestController
{
    public function __invoke(): JsonResponse
    {
        return new JsonResponse(["message" => true]);
    }
}