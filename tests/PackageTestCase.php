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
        tap($app->make('config'), static function (Repository $config): void {
            $config->set('headers', [
                'remove' => [
                    'X-Powered-By',
                    'x-powered-by',
                    'Server',
                    'server',
                ],

                'referrer-policy' => 'no-referrer-when-downgrade',

                'strict-transport-security' => 'max-age=31536000; includeSubDomains',

                'certificate-transparency' => 'enforce, max-age=30',

                'permissions-policy' => 'autoplay=(self), camera=(), encrypted-media=(self), fullscreen=(), geolocation=(self), gyroscope=(self), magnetometer=(), microphone=(), midi=(), payment=(), sync-xhr=(self), usb=()',

                'content-type-options' => 'nosniff',
            ]);
        });
    }
}
