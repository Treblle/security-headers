<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Treblle\SecurityHeaders\Http\Middleware\SetReferrerPolicy;

it('can set the referrer policy for the response', function (): void {
    $middleware = new SetReferrerPolicy();

    $response = $middleware->handle(
        request: Request::create(
            uri: '/',
        ),
        next: fn () => new Response(),
    );

    expect(
        $response->headers->get('Referrer-Policy'),
    )->toEqual('no-referrer-when-downgrade');
});
