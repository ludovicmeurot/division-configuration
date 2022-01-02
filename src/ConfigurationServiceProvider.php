<?php

namespace Division\Configurations;

use Illuminate\Support\ServiceProvider;

class ConfigurationServiceProvider extends ServiceProvider
{
    /**
     * Enregistrement des liaisons de classe dans le fournisseur de service
     *
     * @access  public
     * @author  Ludovic Meurot
     * @version 0.0.1 - 02/01/2022 - by LM
     */
    public function register()
    {

    }

    /**
     * Liaison des éléments du packages dans la boot méthode du fournisseur de service
     *
     * @access  public
     * @author  Ludovic Meurot
     * @version 0.0.1 - 02/01/2022 - by LM
     */
    public function boot ()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
