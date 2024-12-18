<?php

namespace TechCell\TechcellSocialite;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TechCell\TechcellSocialite\Commands\TechcellSocialiteCommand;

class TechcellSocialiteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('techcell-socialite')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_techcell_socialite_table')
            ->hasCommand(TechcellSocialiteCommand::class);
    }
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/techcell-socialite.php',
            'services'
        );
    }

}
