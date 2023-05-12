<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Treblle\SecurityHeaders\Http\Middleware\PermissionsPolicy;

it('can set the permissions policy for the response', function (): void {
    $middleware = new PermissionsPolicy();

    $response = $middleware->handle(
        request: Request::create(
            uri: '/',
        ),
        next: fn () => new Response(),
    );

    expect(
        $response->headers->get('Permissions-Policy'),
    )->toEqual('autoplay=(self), camera=(), encrypted-media=(self), fullscreen=(), geolocation=(self), gyroscope=(self), magnetometer=(), microphone=(), midi=(), payment=(), sync-xhr=(self), usb=()');
});
