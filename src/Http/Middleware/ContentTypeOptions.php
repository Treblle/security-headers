<?php

declare(strict_types=1);

namespace Treblle\SecurityHeaders\Http\Middleware;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Closure;

final class ContentTypeOptions
{
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Response $response
         */
        $response = $next($request);

        $response->headers->set(
            key: 'X-Content-Type-Options',
            values: strval(config('headers.content-type-options')),
        );

        return $response;
    }
}
