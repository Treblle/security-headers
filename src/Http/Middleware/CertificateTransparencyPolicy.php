<?php

declare(strict_types=1);

namespace Treblle\SecurityHeaders\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Closure;

final class CertificateTransparencyPolicy
{
    public function handle(Request $request, Closure $next): Response
    {
        /**
         * @var Response $response
         */
        $response = $next($request);

        $response->headers->set(
            key: 'Expect-CT',
            values: strval(config('headers.certificate-transparency')),
        );

        return $response;
    }
}
