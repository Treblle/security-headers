<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Treblle\SecurityHeaders\Http\Middleware\XSSMode;

it('can set the cross site protection mode for the response', function (): void {
    $middleware = new XSSMode();

    $response = $middleware->handle(
        request: Request::create(
            uri: '/',
        ),
        next: fn () => new Response(),
    );

    expect(
        $response->headers->get('X-XSS-Protection'),
    )->toEqual('1; mode=block');
});
