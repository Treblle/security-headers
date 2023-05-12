<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Treblle\SecurityHeaders\Http\Middleware\CertificateTransparencyPolicy;

it('can set the certificate transparency policy for the response', function (): void {
    $middleware = new CertificateTransparencyPolicy();

    $response = $middleware->handle(
        request: Request::create(
            uri: '/',
        ),
        next: fn () => new Response(),
    );

    expect(
        $response->headers->get('Expect-CT'),
    )->toEqual('enforce, max-age=30');
});
