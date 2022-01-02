<?php

use Division\Configurations\Models\Configuration;

if(!function_exists('division_configuration'))
{

    /**
     * Permet de récupérer une valeur de configuration enregistré dans la base de données
     *
     * @param   string           $code       Code permettant de récupérer la configuration
     * @return  string|null      Retourne la valeur de la configuration sous forme de chaine de caractère ou null
     * @author  Ludovic Meurot -
     * @version 0.1 - 02/01/2022 - by LM
     */
    function division_configuration (string $code) : ?string
    {
        return Configuration::where('code', $code)->first()->value ?? null;
    }
}

if(!function_exists('configuration')) {

    /**
     * Alias de la fonction lulme_configuration
     *
     * @param   string           $code       Code permettant de récupérer la configuration
     * @return  string|null      Retourne la valeur de la configuration sous forme de chaine de caractère ou null
     * @author  Ludovic Meurot -
     * @version 0.1 - 02/01/2022 - by LM
     */
    function configuration (string $code) : ?string
    {
        return division_configuration($code);
    }
}
