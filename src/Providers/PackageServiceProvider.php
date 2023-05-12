<?php

declare(strict_types=1);

namespace Treblle\SecurityHeaders\Providers;

use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/headers.php' => config_path('headers.php'),
        ], 'security-headers');
    }
}
