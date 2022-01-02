<?php

namespace Division\Configurations\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    /**
     * Liste des champs pouvant être affectés en masse
     *
     * @var string[]
     */
    protected $fillable = ['code', 'name', 'description', 'value'];

    /**
     * @return \Division\Configurations\Database\Factories\ConfigurationFactory
     */
    protected static function newFactory ()
    {
        return \Division\Configurations\Database\Factories\ConfigurationFactory::new();
    }
}
