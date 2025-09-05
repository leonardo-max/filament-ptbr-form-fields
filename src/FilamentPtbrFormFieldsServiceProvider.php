<?php

namespace Leandrocfe\FilamentPtbrFormFields;

use Filament\PluginServiceProvider;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;

class FilamentPtbrFormFieldsServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-ptbr-form-fields';

    public function boot(): void
    {
        parent::boot();

        FilamentAsset::registerScripts([
            'money-script' => __DIR__.'/../resources/js/money.js',
        ], package: static::$name);
    }

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name(static::$name)
            ->hasConfigFile()
            ->hasViews();
    }
}
