<?php

declare(strict_types=1);

namespace Treblle\SecurityHeaders\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

final class SetReferrerPolicy
{
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Response $response
         */
        $response = $next($request);

        $response->headers->set(
            key: 'Referrer-Policy',
            values: strval(config('headers.referrer-policy')),
        );

        return $response;
    }
}
