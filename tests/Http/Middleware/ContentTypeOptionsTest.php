<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Treblle\SecurityHeaders\Http\Middleware\ContentTypeOptions;

it('can set the referrer policy for the response', function (): void {
    $middleware = new ContentTypeOptions();

    $response = $middleware->handle(
        request: Request::create(
            uri: '/',
        ),
        next: fn () => new Response(),
    );

    expect(
        $response->headers->get('X-Content-Type-Options'),
    )->toEqual('nosniff');
});
