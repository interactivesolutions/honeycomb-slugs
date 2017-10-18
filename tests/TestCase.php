<?php

declare(strict_types = 1);

namespace Tests;


use Illuminate\Foundation\Application;
use interactivesolutions\honeycombslugs\app\providers\HCSlugsServiceProvider;

/**
 * Class TestCase
 * @package Tests
 */
abstract class TestCase extends \Orchestra\Testbench\BrowserKit\TestCase
{
    /**
     *
     */
    protected function setUp()
    {
        parent::setUp();
    }

    /**
     * @param Application $app
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            HCSlugsServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);
    }
}