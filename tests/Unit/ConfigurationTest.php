<?php

namespace Division\Configurations\Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Division\Configurations\Tests\TestCase;
use Division\Configurations\Models\Configuration;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function register_configuration_test()
    {
        $configuration = Configuration::factory()->create([
            'code' => 'configuration_1',
            'name' => 'Configuration 1',
            'description' => 'Ceci est la configuration 1',
            'value' => 1
        ]);

        $this->assertEquals('Configuration 1', $configuration->name);
    }

    /** @test */
    function get_configuration_with_helper_test ()
    {
        Configuration::factory()->create([
            'code' => 'configuration_1',
            'name' => 'Configuration 1',
            'description' => 'Ceci est la configuration 1',
            'value' => "Valeur de la configuration 1"
        ]);

        $configuration = division_configuration('configuration_1');
        $this->assertEquals('Valeur de la configuration 1', $configuration);
    }

    /** @test */
    function get_configuration_with_helper_that_null ()
    {
        $configuration = division_configuration('not_fount');
        $this->assertNull($configuration);
    }

    /** @test */
    function get_configuration_with_helper_alias ()
    {
        Configuration::factory()->create([
            'code' => 'configuration_1',
            'name' => 'Configuration 1',
            'description' => 'Ceci est la configuration 1',
            'value' => "Valeur de la configuration 1"
        ]);

        $configuration = configuration('configuration_1');
        $this->assertEquals('Valeur de la configuration 1', $configuration);
    }
}
