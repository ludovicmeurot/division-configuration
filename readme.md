# Package de gestion de configurations pour laravel

Ce package permet de gérer des configurations dans une table simple de base de données.

⚠️ Ceci est un paquet headless. cela signifie qu'il ne contient aucun élément lié à l'interface. 
Pour gérer des configurations depuis un système d'administration, il vous appartient de gérer vos propres contrôleurs.
Cependant, vous pouvez utiliser le `ConfigurationRequest` fichier contenant les règles de validations pour enregistrer une configuration.

## Pré-requis
Laravel >= 8

## Installation

```shell
composer require division/configuration
```

Exécuter les migrations

```shell
php artisan migrate
```

## Utilisation 

Enregistrement d'une configuration

```php
\Division\Configurations\Models\Configuration::create([
    'code' => 'configuration_1',
    'name' => 'Configuration 1',
    'description' => 'Description de ma configuration 1',
    'value' => 'Valeur de ma configuration 1'
]);
```

### Helpers
Pour simplifier l'utilisation des configuration, un helper est enregistré via composer
pour être appelé depuis n'importe ou dans l'application. 

L'appel à une fonction d'aide pour récupérer une configuration retournera uniquement la valeur 
de la configuration sous forme de chaine de caractère.

```php
division_configuration(string $code)
```

Un alias est disponible dans le cas ou la fonction ne serait pas déjà implémenté par l'application.

```php
configuration(string $code)
```

### Depuis le modèle 
Il est possible d'utiliser le modèle pour récupérer des configurations de manière plus complexe. 

```php
\Division\Configurations\Models\Configuration::where('code', 'configuration_1')->first())
```
