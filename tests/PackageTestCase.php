<?php

declare(strict_types=1);

namespace Treblle\SecurityHeaders\Tests;

use Illuminate\Config\Repository;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;
use Treblle\SecurityHeaders\Providers\PackageServiceProvider;

abstract class PackageTestCase extends TestCase
{
    /**
     * @param Application $app
     * @return array<int,class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            PackageServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        tap($app->make('config'), function (Repository $config): void {
            $config->set('headers.remove', [
                'X-Powered-By',
                'Server',
            ]);

            $config->set(
                'headers.referrer-policy',
                'no-referrer-when-downgrade',
            );
            $config->set(
                'headers.xss-mode',
                '1; mode=block',
            );
            $config->set(
                'headers.strict-transport-security',
                'max-age=31536000; includeSubDomains',
            );
            $config->set(
                'headers.certificate-transparency',
                'enforce, max-age=30',
            );
            $config->set(
                'headers.permissions-policy',
                'autoplay=(self), camera=(), encrypted-media=(self), fullscreen=(), geolocation=(self), gyroscope=(self), magnetometer=(), microphone=(), midi=(), payment=(), sync-xhr=(self), usb=()'
            );
            $config->set(
                'headers.content-type-options',
                'nosniff',
            );
        });
    }
}
