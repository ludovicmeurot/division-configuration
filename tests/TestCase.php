<?php

namespace Division\Configurations\Tests;

use Division\Configurations\ConfigurationServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ConfigurationServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
//        include_once __DIR__.'/../database/migrations/2022_01_02_012349_create_configurations_table.php';
//        (new \CreateConfigurationsTable())->up();
    }
}
