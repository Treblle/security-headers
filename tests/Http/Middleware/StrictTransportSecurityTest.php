<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Treblle\SecurityHeaders\Http\Middleware\StrictTransportSecurity;

it('can set the strict transport security rules for the response', function (): void {
    $middleware = new StrictTransportSecurity();

    $response = $middleware->handle(
        request: Request::create(
            uri: '/',
        ),
        next: fn () => new Response(),
    );

    expect(
        $response->headers->get('Strict-Transport-Security'),
    )->toEqual('max-age=31536000; includeSubDomains');
});
