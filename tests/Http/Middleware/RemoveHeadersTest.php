<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Treblle\SecurityHeaders\Http\Middleware\RemoveHeaders;

it('can remove a header', function (): void {
    $middleware = new RemoveHeaders();

    $response = $middleware->handle(
        request: Request::create(
            uri: '/',
        ),
        next: fn () => (new Response())->withHeaders(
            headers: [
                'X-Powered-By' => 'PestPHP',
            ]
        ),
    );

    expect(
        $response->headers->all(),
    )->toBeArray()->not->toContain('X-Powered-By');
});
