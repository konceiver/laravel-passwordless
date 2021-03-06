<?php

declare(strict_types=1);

namespace Konceiver\Passwordless\Tests;

use Konceiver\Passwordless\Providers\PasswordlessServiceProvider;
use Laravel\Fortify\FortifyServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            FortifyServiceProvider::class,
            PasswordlessServiceProvider::class,
        ];
    }
}
