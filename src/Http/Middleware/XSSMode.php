<?php

declare(strict_types=1);

namespace Treblle\SecurityHeaders\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

final class XSSMode
{
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Response $response
         */
        $response = $next($request);

        $response->headers->set(
            key: 'X-XSS-Protection',
            values: strval(config('headers.xss-mode')),
        );

        return $response;
    }
}
